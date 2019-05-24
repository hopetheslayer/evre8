<?php

use Illuminate\Database\Seeder;
use App\Models\Danisman;

class DanismanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $danisman = new Danisman();
        $danisman->name = 'umut';
        $danisman->email = 'd@d.com';
        $danisman->password = Hash::make('lol123');
        $danisman->kulad = 'danisman umut';
        $danisman->adres = 'Gökusağı Mah. 1204. Sok. No:19/20 Çankaya / Ankara';
        $danisman->sname = 'qral';
        $danisman->dt = '17.03.1994';
        $danisman->telno = '0530 391 07 09';
        $danisman->gsor = 'yokyok';
        $danisman->verified ='1';
        $danisman->tcno = "304 391 07 09";
        $danisman->save();
    }
}
