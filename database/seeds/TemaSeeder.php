<?php

use Illuminate\Database\Seeder;

use App\Models\Tema\TemaAyarları;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tema = new TemaAyarları();
        $tema->adres = 'Gökusağı Mah. 1204. Sok. No:19/20 Çankaya / Ankara';
        $tema->telefon = '0 (312) 475 67 89';
        $tema->telefon_2 = '0 (312) 475 67 89';
        $tema->mail = 'adminthehödö';
        $tema->fyazi = 'Uzun yıllar bilişim sektöründe entegratör';
        $tema->filetisim = 'Gökusağı Mah. 1204. Sok. No:19/20 Çankaya / Ankara';

        $tema->save();
    }
}
