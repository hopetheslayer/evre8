<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = new Admin();
        $Admin->name = 'umutadminkul';
        $Admin->email = 'ud@d.com';
        $Admin->title = 'adminthehödö';
        $Admin->password = Hash::make('lol123');
        $Admin->save();
    }
}
