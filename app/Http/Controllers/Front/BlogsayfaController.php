<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog\Blog;
use App\Models\Blog\BlogKategori;
use App\Models\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogsayfaController extends Controller
{
    public function blog()
    {


        $blog = Blog::where('yayın',1)->orderBy(DB::raw('RAND()'))->paginate(10);

        $ayar = TemaAyarları::all();

        $kategori = BlogKategori::all();

        return view('frontend.blog.front-blog-page',compact('blog','ayar','kategori'));

    }

    public function blogkat($id)
    {

        $kategori = BlogKategori::where('slug',$id)->firstOrFail();
        $ayar = TemaAyarları::all();

        $kategoris = BlogKategori::all();

        $blog = Blog::where('blogkategori_id',$kategori->id)->paginate(10);


        $deneme = $kategori->blog;





        return view('frontend.blog.bkategori',compact('kategori','ayar','kategoris','blog','deneme'));

    }

    public function post($id)
    {

        $blog = Blog::whereSlug($id)->firstOrFail();

        $ayar = TemaAyarları::all();
        $kategoris = BlogKategori::all();





        return view('frontend.blog.bpost',compact('ayar','kategoris','blog'));
    }
}
