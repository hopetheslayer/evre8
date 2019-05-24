<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DanismanSeeder::class);
        $this->call(PsikologSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(AdminanasayfaSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BlogKategoriSeeder::class);
        $this->call(PsikologuzmanSeeder::class);
        $this->call(İlSeeder::class);
        $this->call(İlceSeeder::class);
    }
}
