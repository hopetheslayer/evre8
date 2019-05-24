<?php

namespace App\Http\Controllers\Psikolog\Blog;

use App\Models\Blog\Blog;
use App\Models\Blog\BlogKategori;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PsikologBlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:psikolog');
    }

   public function index()
   {

       $blogs = Blog::all();

       $blogkategori = BlogKategori::all();

       return view('backend.Psikolog.blog.blog',compact('blogs','blogkategori'));
   }


   public function create()
   {
       $blogkategori = BlogKategori::all();
    return view('backend.Psikolog.blog.blogcreater',compact('blogkategori'));
   }


    public function store(Request $request)
    {

        $this->validate(request(),[
            'yazibaslik' => 'required',
            'yazi' => 'required',
            'kimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blogkategori' => 'required',
            'blog-aciklama' => 'required',
            'blog-keyword' => 'required',
        ]);


        $blog = new Blog();

        $blog->post_baslik = request('yazibaslik');




        $blog->yazi = request('yazi');

        $blog->blog_aciklama = request('blog-aciklama');
        $blog->blog_keyword = request('blog-keyword');
        if(Input::hasFile('kimage'))
        {
            $file = Input::file('kimage');
            $file->move('uploads/blog',$file->getClientOriginalName());
            $blog->kimage = $file->getClientOriginalName();
        }

        if(Input::hasFile('gimage'))
        {
            $file = Input::file('gimage');
            $file->move('uploads/blog',$file->getClientOriginalName());
            $blog->gimage = $file->getClientOriginalName();
        }

        $blog->psikolog_id = auth()->id();

        $blog['yayın'] = request()->has('yayın') ? 1: 0;

        $blog->blogkategori_id = request('blogkategori');







        $blog->save();

        Toastr::success('Blog Başarıyla Oluşturuldu','Success');




        return redirect()->route('Psikolog-blog.index');



    }


   public function edit($id)
   {
       $blog = Blog::findOrFail($id);
       $blogkategori = BlogKategori::all();

       $blog_kategoriler = $blog->blogkategori()->pluck('id')->all();


    return view('backend.Psikolog.blog.edit',compact('blog','blogkategori','blog_kategoriler'));
   }


   public function guncelle(Request $request,$id)
   {

       $data = request()->only('post_baslik','yazi','kimage','gimage','blog_aciklama','blog_keyword','yayın');

       $entry = Blog::where('id',$id)->firstOrFail();
       $entry1 = Blog::where('id',$id)->firstOrFail();



       if(request()->hasFile('kimage'))
       {
           $this->validate(request(),[
               'kimage' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
           ]);

           $urun_resmi = request()->file('kimage');
           $urun_resmi = request()->kimage;

           $dosyad = $entry->id . "-" . time() . "." . $urun_resmi->extension();

           if($urun_resmi->isValid())
           {
               $urun_resmi->move('uploads/blog',$dosyad);

               Blog::updateOrCreate(
                   ['id' => $entry->id],
                   ['kimage'=> $dosyad]
               );

           }
       }

       if(request()->hasFile('gimage'))
       {
           $this->validate(request(),[
               'gimage' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
           ]);

           $urun_resmi = request()->file('gimage');
           $urun_resmi = request()->gimage;

           $dosyad = $entry1->id . "-" . time() . "." . $urun_resmi->extension();

           if($urun_resmi->isValid())
           {
               $urun_resmi->move('uploads/blog',$dosyad);

               Blog::updateOrCreate(
                   ['id' => $entry1->id],
                   ['gimage'=> $dosyad]
               );

           }
       }

       $data['yayın'] = request()->has('yayın') ? 1: 0;

       $blogkat = request('blogkategori');



       $entry->blogkategori($blogkat);

       $entry1->update($data);






       Toastr::success('Blog Başarıyla Güncellendi','Success');

       return redirect()->route('Psikolog-blog.index',$entry->id);

   }

   public function kaydet($id)
   {
       $data = request()->only('post_baslik','yazi','kimage','gimage','blog_aciklama','blog_keyword','taslak');

       $entry = Blog::where('id',$id)->firstOrFail();
       $entry1 = Blog::where('id',$id)->firstOrFail();
       $entry->update($data);
       $entry1->update($data);

       if(request()->hasFile('kimage'))
       {
           $this->validate(request(),[
               'kimage' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
           ]);

           $urun_resmi = request()->file('kimage');
           $urun_resmi = request()->kimage;

           $dosyad = $entry->id . "-" . time() . "." . $urun_resmi->extension();

           if($urun_resmi->isValid())
           {
               $urun_resmi->move('uploads/blog',$dosyad);

               Blog::updateOrCreate(
                   ['id' => $entry->id],
                   ['kimage'=> $dosyad]
               );

           }
       }

       if(request()->hasFile('gimage'))
       {
           $this->validate(request(),[
               'gimage' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
           ]);

           $urun_resmi1 = request()->file('gimage');
           $urun_resmi1 = request()->gimage;

           $dosyad1 = $entry->id . "-" . time() . "." . $urun_resmi1->extension();

           if($urun_resmi1->isValid())
           {
               $urun_resmi1->move('uploads/blog',$dosyad1);

               Blog::updateOrCreate(
                   ['id' => $entry1->id],
                   ['gimage'=> $dosyad1]
               );

           }
       }


       Toastr::success('Blog Başarıyla Güncellendi','Success');

       return redirect()->route('Psikolog-blog.index',$entry->id);
   }

   public function destroy($id)
   {
       Blog::find($id)->delete();
       Toastr::warning('Blog Silindi','Success');
       return redirect()->route('Psikolog-blog.index');
   }
}
