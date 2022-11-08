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
$router->get('2013/paud/capaian',        'RaporController@capaian');
// sd
$router->get('2013/sd/cover',        'RaporController@cover');
$router->get('2013/sd/identitassekolah',        'RaporController@identitassekolah');
$router->get('2013/sd/identitassiswa',        'RaporController@identitassiswa');
$router->get('2013/sd/hasil',        'RaporController@hasil');