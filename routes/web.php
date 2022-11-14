<?php
use Illuminate\Support\Str;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// generate key
$router->get('/key', function () {
    return  Str::random(32);
});

// 2013
// paud
$router->get('2013/paud/cover',        'RaporController@coverPaud');
$router->get('2013/paud/identitassiswa',        'RaporController@identitasSiswaPaud');
$router->get('2013/paud/laporan',        'RaporController@laporanPaud');
$router->get('2013/paud/pertumbuhan',        'RaporController@pertumbuhanPaud');
$router->get('2013/paud/penutup',        'RaporController@penutupPaud');

// sd
$router->get('2013/sd/cover',        'RaporController@cover');
$router->get('2013/sd/identitassekolah',        'RaporController@identitassekolah');
$router->get('2013/sd/identitassiswa',        'RaporController@identitassiswa');
$router->get('2013/sd/hasil',        'RaporController@hasil');

// smp
$router->get('2013/smp/cover',        'RaporController@coverSmp');
$router->get('2013/smp/sikap',        'RaporController@sikapSmp');
$router->get('2013/smp/pengetahuan',        'RaporController@pengetahuan');
$router->get('2013/smp/keterampilan',        'RaporController@keterampilan');
$router->get('2013/smp/ekskul',        'RaporController@ekskul');

