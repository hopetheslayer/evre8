<?php

use Illuminate\Database\Seeder;
use App\Models\Tema\AnasayfaAyarları;

class AdminanasayfaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnasayfaAyarları::insert([
            'id' => '1',

        ]);

    }
}
