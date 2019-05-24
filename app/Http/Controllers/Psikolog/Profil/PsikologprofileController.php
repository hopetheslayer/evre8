<?php

namespace App\Http\Controllers\Psikolog\Profil;

use App\Models\Psikolog;

use App\Models\PsikologDetay;
use App\Models\Psikologdosya;
use App\Models\PsikologUzman;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PsikologprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:psikolog');
    }

    public function index()
    {

        $user_id = auth()->id();





        $psikolog = Psikolog::Where('id',$user_id)->firstOrFail();

        $psikologuzman = PsikologUzman::all();

        $uzmankat =[];
        $uzmankat = $psikolog->uzmankategoriler()->pluck('psikolog_uzman_id')->all();

        $photos = Psikologdosya::where('psikolog_id',$user_id)->get();

        return view('backend.Psikolog.profil.index',compact('psikolog','psikologuzman','uzmankat','photos'));
    }




    public function kaydet(Request $request)
    {


        $data = request()->only('sname','name','telno');

        $data1 = request()->only('unvan','cinsiyet','dt','adres','hakkimda','tcno','image','kulad');




        $uzmankat = request('uzmankat');

        $entry = Psikolog::where('id',Auth::id())->firstOrFail();
        $entry1 = PsikologDetay::where('id',Auth::id())->firstOrFail();

        $entry1->update($data1);
        $entry->update($data);

        $entry->uzmankategoriler()->sync($uzmankat);

        if(request()->hasFile('image'))
        {
            $this->validate(request(),[
                'image' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('image');
            $urun_resmi = request()->image;

            $dosyad = $entry1->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/psikolog/',$dosyad);

                PsikologDetay::updateOrCreate(
                    ['id' => $entry1->id],
                    ['image'=> $dosyad]
                );

            }
        }



        $request->validate([
            'imagex' => 'required',
            'imagex.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //check if image exist
        if ($request->hasFile('imagex')) {
            $images = $request->file('imagex');

            //setting flag for condition
            $org_img = $thm_img = true;


            // loop through each image to save and upload
            foreach($images as $key => $image) {
                //create new instance of Photo class
                $newPhoto = new Psikologdosya();

                $newPhoto->psikolog_id = auth()->id();


                //get file name of image  and concatenate with 4 random integer for unique
                $filename = $entry1->id ."-". time().'.'.$image->extension();

                if ($image->isValid())
                {
                $image->move('uploads/psikolog/sert',$filename);
                }

                $newPhoto->imagex     = $filename;


              $newPhoto->save();
            }
        }


        //$image_resize = Image::make($image->getRealPath());

        //$image_resize->resize(1000,1000);
        // $image_resize->save(public_path('uploads/psikolog/sert/' .$filename));


        Toastr::success('Detaylar Eklendi','Success');

        return redirect()->route('psikolog.profil.getir',$entry->id);


    }

    public function sil($id)
    {
            $dosya = Psikologdosya::findorFail($id);
            $dosya->delete();

        Toastr::success('Eklediğiniz dosya Silinidi','Success');

        return redirect()->route('psikolog.profil.getir');
    }

    public function profilonizle()
    {

        $user_id = auth()->id();

        $psikolog = Psikolog::where('id',$user_id)->get();



        $psikologuzman = PsikologUzman::all();

        $photos = Psikologdosya::all();







        return view('backend.Psikolog.profil.profiloniz',compact('psikolog','psikologuzman','photos'));
    }
}
