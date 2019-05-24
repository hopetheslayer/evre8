<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------BACKEND------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------



Route::get('deneme','DenemeController@deneme')->name('deneme');
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //admin password reset routes
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});





//Admin Danışanlar Controll

Route::group(['prefix' => 'Admin-danısan-yonetim'], function () {

    Route::match(['get','post'],'/','Admin\AdminuserController@index')->name('hesaplar.users');
    //html form getirir
    Route::get('/goster/{id}','Admin\AdminuserController@show')->name('hesaplar.users.goster');
    Route::get('/yeni','Admin\AdminuserController@form')->name('hesaplar.users.yeni');
    Route::get('/duzenle/{id}','Admin\AdminuserController@edit')->name('hesaplar.users.duzenle');
    Route::post('/duzenle/{id?}','Admin\AdminuserController@update')->name('hesaplar.users.guncelle');
    Route::post('/kaydet','Admin\AdminuserController@kaydet')->name('hesaplar.users.kaydet');
    Route::delete('/sil/{id}','Admin\AdminuserController@sil')->name('hesaplar.users.sil');
});

//Admin Psikolog Controll
Route::group(['prefix' => 'Admin-psikolog-yonetim'], function () {

    Route::match(['get','post'],'/','Admin\AdminpsikologController@index')->name('psikolog.users');
    //html form getirir
    Route::get('/goster/{id}','Admin\AdminpsikologController@show')->name('hesaplar.psikolog.goster');
    Route::get('/yeni','Admin\AdminpsikologController@form')->name('hesaplar.psikolog.yeni');
    Route::get('/duzenle/{id}','Admin\AdminpsikologController@edit')->name('hesaplar.psikolog.duzenle');
    Route::post('/duzenle/{id?}','Admin\AdminpsikologController@update')->name('hesaplar.psikolog.guncelle');
    Route::post('/kaydet','Admin\AdminpsikologController@kaydet')->name('hesaplar.psikolog.kaydet');
    Route::delete('/sil/{id}','Admin\AdminpsikologController@sil')->name('hesaplar.psikolog.sil');
});

//Admin Danışmanlar Controll
Route::group(['prefix' => 'Admin-danisman-yonetim'], function () {

    Route::match(['get','post'],'/','Admin\AdmindanismanController@index')->name('hesaplar.danisman.users');
    //html form getirir
    Route::get('/goster/{id}','Admin\AdmindanismanController@show')->name('hesaplar.danisman.goster');
    Route::get('/yeni','Admin\AdmindanismanController@form')->name('hesaplar.danisman.yeni');
    Route::get('/duzenle/{id}','Admin\AdmindanismanController@edit')->name('hesaplar.danisman.duzenle');
    Route::post('/duzenle/{id?}','Admin\AdmindanismanController@update')->name('hesaplar.danisman.guncelle');
    Route::post('/kaydet','Admin\AdmindanismanController@kaydet')->name('hesaplar.danisman.kaydet');
    Route::delete('/sil/{id}','Admin\AdmindanismanController@sil')->name('hesaplar.danisman.sil');
});


//Admin kullanıcısı yasaklı userleri listeler

Route::group(['prefix' => 'Admin-yasak'], function () {

    Route::match(['get','post'],'/','Admin\AdminyasakController@index')->name('yasak.users');
    //html form getirir
    Route::get('/goster/{id}','Admin\AdminyasakController@show')->name('yasak.users.goster');
    Route::get('/duzenle/{id}','Admin\AdminyasakController@edit')->name('yasak.users.duzenle');
    Route::post('/duzenle/{id?}','Admin\AdminyasakController@update')->name('yasak.users.guncelle');
});

Route::resource('/Admin-tema-ayarlari','Tema\TemaController');
//------------------------------------------------------------------
Route::post('/Admin-tema-ayarlari/kaydet/{id?}','Tema\TemaController@kaydet')->name('tema.ayar.kaydet');
//------------------------------------------------------------------
Route::get('/Admin-anasayfa-ayarlari','Tema\TemaController@anasayfa')->name('admin.tema.anasayfa.getir');
//------------------------------------------------------------------
Route::post('/Admin-anasayfa-ayarlari/kaydet/{id?}','Tema\TemaController@anasayfakaydet')->name('admin.tema.anasayfa.kaydet');

Route::resource('/Admin-randevular','Admin\AdminrandevuController');


Route::get('Admin-Ticket', 'Admin\Ticket\AdminTicketsController@index')->name('admin.ticket');
Route::post('close_ticket/{ticket_id}', 'Admin\Ticket\AdminTicketsController@close')->name('admin.ticket.close');
Route::post('admin_comment', 'Admin\Ticket\AdminTicketsController@postComment')->name('admin.ticket.yorum');
Route::get('tickets/{ticket_id}', 'Admin\Ticket\AdminTicketsController@show')->name('admin.ticket.show');

//Admin Onay
Route::group(['prefix' => 'Admin-onay-yonetim'], function () {

    Route::match(['get','post'],'/','Admin\AdmindanismanController@index')->name('psikolog.onay');
    //html form getirir
    Route::get('/goster/{id}','Admin\AdmindanismanController@show')->name('psikolog.onay.goster');
    Route::get('/duzenle/{id}','Admin\AdmindanismanController@edit')->name('hesaplar.danisman.duzenle');
    Route::post('/duzenle/{id?}','Admin\AdmindanismanController@update')->name('hesaplar.danisman.guncelle');
    Route::post('/kaydet','Admin\AdmindanismanController@kaydet')->name('hesaplar.danisman.kaydet');
    Route::delete('/sil/{id}','Admin\AdmindanismanController@sil')->name('hesaplar.danisman.sil');
});



//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//Psikolog Routes
Route::prefix('psikolog')->group(function () {
    Route::get('/', 'Psikolog\PsikologController@index')->name('psikolog.dashboard');
    Route::get('/login', 'Psikolog\PsikologLoginController@showLoginForm')->name('psikolog.login');
    Route::post('/login', 'Psikolog\PsikologLoginController@login')->name('psikolog.login.submit');
    Route::post('/logout','Psikolog\PsikologLoginController@logout')->name('psikolog.logout');
    Route::get('/kayit','Front\PsikologKayitController@getCountries')->name('psikolog.kayit.getir');
    Route::get('dropdownlist/getstates/{id}','Front\PsikologKayitController@getStates');
    Route::post('/kayit','Front\PsikologKayitController@store')->name('psikolog.kayit');

});



Route::resource('Danisan','Psikolog\PsikologMusteriController');


Route::resource('Calisma-Saatleri','Psikolog\PsikologCalismaSaatleriController');



Route::resource('Takvim','Psikolog\PsikologtakvimController');

Route::resource('Destek-Biletlerim','Psikolog\Tickets\TicketsController');



Route::get('Psikolog/Profil-Ayarları','Psikolog\Profil\PsikologprofileController@index')->name('psikolog.profil.getir');
//------------------------------------------------------------------
Route::post('/Psikolog/Profil-Ayarları/kaydet/{id?}','Psikolog\Profil\PsikologprofileController@kaydet')->name('psikolog.profil.kaydet');
//------------------------------------------------------------------
Route::post('comment', 'Psikolog\Tickets\TicketsController@postComment')->name('ticket.psikolog.yorum');

Route::get('Psikolog/Profil-Ayarları-ayax', 'Psikolog\Profil\PsikologprofileController@select2LoadMore');

Route::get('Psikolog/profilonizle','Psikolog\Profil\PsikologprofileController@profilonizle')->name('psikolog.profil.oniz');

Route::delete('/Psikolog/sil/{id}','Psikolog\Profil\PsikologprofileController@sil')->name('psikolog.dosya.sil');

//Psikolog Blog


Route::resource('Psikolog-blog','Psikolog\Blog\PsikologBlogController');

Route::post('/Psikolog-blog/kaydet/{id?}','Psikolog\Blog\PsikologBlogController@kaydet')->name('yonetim.psikolog.kaydet');

Route::post('/Psikolog-blog/duzenle/{id?}','Psikolog\Blog\PsikologBlogController@guncelle')->name('blog.psikolog.guncelle');


Route::get('/Psikolog/şifredegistir','Psikolog\Uye\UyeController@Showcph')->name('psikolog.sifre.getir');
Route::post('/Psikolog/şifredegistirp','Psikolog\Uye\UyeController@Showcph1')->name('psikolog.sifre.degistir');

Route::get('/Psikolog/emaildegistir','Psikolog\Uye\UyeController@mailsj')->name('psikolog.mail.getir');
Route::post('/Psikolog/emaildegistirp','Psikolog\Uye\UyeController@mailsjsj')->name('psikolog.mail.degistir');




//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//Danışman Routes
Route::prefix('danisman')->group(function () {
    Route::get('/', 'Danisman\DanismanController@index')->name('danisman.dashboard');
    Route::get('/login', 'Danisman\DanismanLoginController@showLoginForm')->name('danisman.login');
    Route::post('/login', 'Danisman\DanismanLoginController@login')->name('danisman.login.submit');
    Route::post('/logout','Danisman\DanismanLoginController@logout')->name('danisman.logout');
    Route::get('/kayit','Danisman\Kayit\KulController@kayıt_form')->name('kullanici.kaydol');
    Route::post('/kayit','Danisman\Kayit\KulController@kayit');

});


//-----------------------------------------------------------------------------------------
//------------------------------------------------
//--------------------END BACKEND-------------------------
//--------------------------------------------


//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//Danisan Routes
Route::prefix('danisan')->group(function () {
    Route::get('/', 'Danisan\Giris\DanisanController@index')->name('danisan.dashboard');
    Route::get('/login', 'Danisan\Giris\DanisanLoginController@showLoginForm')->name('danisan.login');
    Route::post('/login', 'Danisan\Giris\DanisanLoginController@login')->name('danisan.login.submit');
    Route::post('/logout','Danisan\Giris\DanisanLoginController@logout')->name('danisan.logout');
    Route::get('/kayit','Danisman\Kayit\KulController@kayıt_form')->name('danisan.kaydol');
    Route::post('/kayit','Danisman\Kayit\KulController@kayit');

});


//-----------------------------------------------------------------------------------------
//------------------------------------------------
//--------------------END BACKEND-------------------------
//--------------------------------------------



//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------FRONTEND------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------


Route::get('/','Front\FrontController@front')->name('anasayfa');

Route::get('/blog','Front\BlogsayfaController@blog')->name('blog');

Route::get('/blog-kategoriler/{id}','Front\BlogsayfaController@blogkat')->name('bkategori');

Route::get('/blog/{id}','Front\BlogsayfaController@post')->name('sblog');

Route::get('/psikologlar','Front\PsikologlarController@index')->name('front.psikolog');





//-----------------------------------------------------------------------------------------
//------------------------------------------------
//--------------------END FRONTEND-------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------LOG------------------------
//--------------------------------------------
//-----------------------------------------------------------------------------------------
//------------------------------------------------
//---------------------------------------------
//--------------------------------------------

Route::post('/getfriends','Danisan\Giris\DanisanController@getFriends');
Route::post('/session/create','Chat\SessionController@create');




Route::group(['prefix' => 'activity', 'middleware' => ['web', 'auth:admin', 'activity']], function () {

    // Dashboards
    Route::get('/', 'LaravelLoggerController@showAccessLog')->name('activity');
    Route::get('/cleared', ['uses' => 'LaravelLoggerController@showClearedActivityLog'])->name('cleared');

    // Drill Downs
    Route::get('/log/{id}', 'LaravelLoggerController@showAccessLogEntry');
    Route::get('/cleared/log/{id}', 'LaravelLoggerController@showClearedAccessLogEntry');

    // Forms
    Route::delete('/clear-activity', ['uses' => 'LaravelLoggerController@clearActivityLog'])->name('clear-activity');
    Route::delete('/destroy-activity', ['uses' => 'LaravelLoggerController@destroyActivityLog'])->name('destroy-activity');
    Route::post('/restore-log', ['uses' => 'LaravelLoggerController@restoreClearedActivityLog'])->name('restore-activity');
});

