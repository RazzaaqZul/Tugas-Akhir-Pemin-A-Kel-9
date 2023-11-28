<?php
use Illuminate\Support\Str;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

/** @var \Laravel\Lumen\Routing\Router $router */

    //  Muhammad Razzaaq Zulkahfi - 215150700111047
$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');
});

$router->get('/mahasiswa', 'MahasiswaController@getMahasiswa');
    //  Muhammad Razzaaq Zulkahfi - 215150700111047
$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/mahasiswa/profile', 'MahasiswaController@getMahasiswaByToken');
    $router->post('/mahasiswa/matakuliah/{mkId}', 'MataKuliahController@postMatkulMahasiswa');
    $router->put('/mahasiswa/matakuliah/{mkId}', 'MataKuliahController@putMatkulMahasiswa');
});
    //  Muhammad Razzaaq Zulkahfi - 215150700111047
$router->get('/mahasiswa/{nim}', 'MahasiswaController@getMahasiswaByNIM');

$router->get('/prodi', 'ProdiController@getProdi');

$router->get('/matakuliah', 'MataKuliahController@getMataKuliah');