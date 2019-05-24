<?php

use Illuminate\Database\Seeder;
use App\Models\PsikologUzman;
class PsikologuzmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uzman = new PsikologUzman();
        $uzman->name = "Despresyon";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Bireysel Terapi";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Uyku Bozuklukları";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Evlilik ve Boşanma Danışmanlığı";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "İlişki Terapisi";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Mesleki Danışmanlık";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Ölüm Korkusu";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Stresle Başa Çıkma";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Öfke Kontrolü";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "İlişki Sorunları";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Anksiyete Bozuklukları";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Aile ve Cift Terapisi";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Ebeveyn Danışmanlığı";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Fobiler";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Yaş";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Sınav Kaygısı";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Özgüven Sorunları";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Madde Bağımlılığı";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Çoçuk Merkezli Aile Danışmanlığı";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Çoçuk Eğitim Danışmanlığı";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Çocuk Davranış Sorunları";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Cinsel Terapi";
        $uzman->save();

        $uzman = new PsikologUzman();
        $uzman->name = "Çözüm Odaklı Terapi";
        $uzman->save();
    }
}
