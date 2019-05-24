<?php

namespace App\Models\Blog;

use App\Models\Psikolog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Blog extends Model
{
    use SoftDeletes;
    use HasSlug;
    protected $table = "blog";

    protected $guarded=[];


    //Blog Model'e psikolog fonksiyonunu tanımlayınca ,
    // veritabanındaki relationship oldugu icin post kime aitse psikolog_id ye baglı olan blog gelir.
    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class,'psikolog_id');
    }


    public function blogkategori()
    {
        return $this->belongsTo(BlogKategori::class,'blogkategori_id');
    }



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('post_baslik')
            ->saveSlugsTo('slug');
    }






}
