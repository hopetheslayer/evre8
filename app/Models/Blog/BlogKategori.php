<?php

namespace App\Models\Blog;

use App\Models\Psikolog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogKategori extends Model
{
    use SoftDeletes;

    protected $table = "blogkategori";

    protected $fillable = ['kategori_adi','slug'];

    protected $guarded = [''];

    public function urunler()
    {
        return $this->belongsToMany('App\Models\Blog\Blog','blog_icerik');
    }






}
