<?php

use App\Models\Ticket\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Teknik Problemler';
        $category->save();

        $category = new Category();
        $category->name = 'Kayıt Esnasındaki Problemler';
        $category->save();

        $category = new Category();
        $category->name = 'Hesaplama Problemleri';
        $category->save();

        $category = new Category();
        $category->name = 'Ödeme Problemleri';
        $category->save();

        $category = new Category();
        $category->name = 'Bug Bildir';
        $category->save();
    }
}
