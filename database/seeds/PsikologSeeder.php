<?php

use Illuminate\Database\Seeder;
use App\Models\Psikolog;
class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $psikolog = new Psikolog();
        $psikolog->name = 'arman';
        $psikolog->sname = 'demirci';
        $psikolog->email = 'p@p.com';
        $psikolog->telno = '0530 391 07 09';
        $psikolog->password = Hash::make('lol123');
        $psikolog->verified ='1';
        $psikolog->il = 'ankara';
        $psikolog->ilce = 'yenimahalle';
        $psikolog->save();
    }
}
