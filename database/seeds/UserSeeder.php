<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'umut';
        $user->email = 'd@d.com';
        $user->password = Hash::make('lol123');
        $user->kulad = 'xel';
        $user->adres = 'Gökusağı Mah. 1204. Sok. No:19/20 Çankaya / Ankara';
        $user->sname = 'derebek';
        $user->dt = '17.03.1992';
        $user->telno = '0530 391 07 09';
        $user->gsor = 'yokyok';
        $user->verified ='1';
        $user->tcno = "304 391 07 09";
        $user->save();


        $user = new User();
        $user->name = 'bobo';
        $user->email = 'bo@bo.com';
        $user->password = Hash::make('lol123');
        $user->kulad = 'köpek adam';
        $user->adres = 'Gökusağı Mah. 1204. Sok. No:19/20 Çankaya / Ankara';
        $user->sname = 'bobus';
        $user->dt = '17.03.1992';
        $user->telno = '0530 391 07 09';
        $user->gsor = 'yokyok';
        $user->verified ='1';
        $user->tcno = "123123123";
        $user->save();
    }
}
