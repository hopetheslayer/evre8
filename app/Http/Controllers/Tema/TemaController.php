<?php

namespace App\Http\Controllers\Tema;

use App\Models\Tema\AnasayfaAyarları;
use App\Models\Tema\TemaAyarları;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

       $ayarlar = TemaAyarları::findOrFail(1)->get();

        return view('backend.Admin.Tema.admin-genel-ayar',compact('ayarlar'));
    }

    public function kaydet()
    {
        $data = request()->only('adres','telefon','telefon_2','mail','logo','flogo','fyazi','filetisim');

        $entry = TemaAyarları::where('id',1)->firstOrFail();
        $entry1 = TemaAyarları::where('id',1)->firstOrFail();

        $entry->update($data);
        $entry1->update($data);

        if(request()->hasFile('logo'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('logo');
            $urun_resmi = request()->logo;

            $dosyad = $entry->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme',$dosyad);

                TemaAyarları::updateOrCreate(
                    ['id' => $entry->id],
                    ['logo'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('flogo'))
        {
            $this->validate(request(),[
                'flogo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('flogo');
            $urun_resmi = request()->flogo;

            $dosyad = $entry->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme',$dosyad);

                TemaAyarları::updateOrCreate(
                    ['id' => $entry->id],
                    ['flogo'=> $dosyad]
                );

            }
        }

        Toastr::success('Tema Ayarları Güncellendi','Success');

        return redirect()->route('Admin-tema-ayarlari.index',$entry->id);
    }

    public function anasayfa()
    {

        $anasayfa = AnasayfaAyarları::findOrFail(1)->get();

        return view('backend.Admin.Tema.Admin-anasayfa',compact('anasayfa'));

    }

    public function anasayfakaydet()
    {

        $data = request()->only('slider_foto','slider_foto1','slider_foto2',
            'section_foto1','section_foto2','section_baslik','section_baslik_yazi','section2_foto1','section2_foto2','section2_foto3','section2_yazi1','section2_yazi2',
            'section2_yazi3','section3_foto1','section3_baslik1','section3_yazi1','section3_yazi1_alt','section3_foto2','section3_baslik2','section3_yazi2','section3_yazi2_alt');


        $entry = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry1 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry2 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry3 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry4 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry5 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry6 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry7 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry8 = AnasayfaAyarları::where('id',1)->firstOrFail();
        $entry9 = AnasayfaAyarları::where('id',1)->firstOrFail();

        $entry->update($data);
        $entry1->update($data);
        $entry2->update($data);
        $entry3->update($data);
        $entry4->update($data);
        $entry5->update($data);
        $entry6->update($data);
        $entry7->update($data);
        $entry8->update($data);
        $entry9->update($data);


        if(request()->hasFile('slider_foto'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('slider_foto');
            $urun_resmi = request()->slider_foto;

            $dosyad = $entry->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry->id],
                    ['slider_foto'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('slider_foto1'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('slider_foto1');
            $urun_resmi = request()->slider_foto1;

            $dosyad = $entry1->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/slider',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry1->id],
                    ['slider_foto1'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('slider_foto2'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('slider_foto2');
            $urun_resmi = request()->slider_foto2;

            $dosyad = $entry2->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/slider',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry2->id],
                    ['slider_foto2'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('section_foto1'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section_foto1');
            $urun_resmi = request()->section_foto1;

            $dosyad = $entry3->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section1',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry3->id],
                    ['section_foto1'=> $dosyad]
                );

            }
        }


        if(request()->hasFile('section_foto2'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section_foto2');
            $urun_resmi = request()->section_foto2;

            $dosyad = $entry4->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section1',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry4->id],
                    ['section_foto2'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('section_foto3'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section_foto3');
            $urun_resmi = request()->section_foto3;

            $dosyad = $entry4->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section1',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry4->id],
                    ['section_foto3'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('section3_foto2'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section3_foto2');
            $urun_resmi = request()->section3_foto2;

            $dosyad = $entry5->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section3',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry5->id],
                    ['section3_foto2'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('section2_foto1'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section2_foto1');
            $urun_resmi = request()->section2_foto1;

            $dosyad = $entry6->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section2',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry6->id],
                    ['section2_foto1'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('section2_foto2'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section2_foto2');
            $urun_resmi = request()->section2_foto2;

            $dosyad = $entry7->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section2',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry7->id],
                    ['section2_foto2'=> $dosyad]
                );

            }
        }


        if(request()->hasFile('section2_foto3'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section2_foto3');
            $urun_resmi = request()->section2_foto3;

            $dosyad = $entry8->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section2',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry8->id],
                    ['section2_foto3'=> $dosyad]
                );

            }
        }

        if(request()->hasFile('section3_foto1'))
        {
            $this->validate(request(),[
                'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('section3_foto1');
            $urun_resmi = request()->section3_foto1;

            $dosyad = $entry9->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/theme/section3',$dosyad);

                AnasayfaAyarları::updateOrCreate(
                    ['id' => $entry9->id],
                    ['section3_foto1'=> $dosyad]
                );

            }
        }


        Toastr::success('Tema Ayarları Güncellendi','Success');

        return redirect()->route('admin.tema.anasayfa.getir',$entry->id);

    }





}
