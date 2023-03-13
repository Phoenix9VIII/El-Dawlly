<?php

use Illuminate\Support\Facades\Route;

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
Route::post('save','host@savedata');

Route::post('l_save','host@l_savedata');

Route::post('bc_save','services@bc_savedata');

Route::post('del_bc','services@delete_bc');

Route::post('i_save','services@i_savedata');

Route::post('del_i','services@delete_i');

Route::post('p_save','services@p_savedata');

Route::post('del_p','services@delete_p');

Route::post('dl_save','services@dl_savedata');

Route::post('del_dl','services@delete_dl');

Route::post('fr_save','services@fr_savedata');

Route::post('del_fr','services@delete_fr');

Route::post('dc_save','services@dc_savedata');

Route::post('del_dc','services@delete_dc');

Route::post('ds_save','services@ds_savedata');

Route::post('del_ds','services@delete_ds');

Route::post('mc_save','services@mc_savedata');

Route::post('del_mc','services@delete_mc');

Route::get('/', function () {
    return view('signup');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('login', function () {
    return view('login');
});
Route::get('الرئيسية', function () {
    return view('index');
});
Route::get('/save', function () {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
})->middleware('check_data');
Route::get('/identity', function () {
    return view('identity');
})->middleware('check_data');

Route::get('/cancelbtn', function () {
    return view('index');
});
Route::get('/donebtn', function () {
    return view('index');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/birthcertificate', function () {
    return view('birthcertificate');
})->middleware('check_data');
Route::get('/passport', function () {
    return view('passport');
})->middleware('check_data');
Route::get('/drivinglicense', function () {
    return view('drivinglicense');
})->middleware('check_data');
Route::get('/familyrestriction', function () {
    return view('familyrestriction');
})->middleware('check_data');
Route::get('/divorcecertificate', function () {
    return view('divorcecertificate');
})->middleware('check_data');
Route::get('/deathcertificate', function () {
    return view('deathcertificate');
})->middleware('check_data');
Route::get('/marriagecontract', function () {
    return view('marriagecontract');
})->middleware('check_data');
Route::get('/checkout.setting', function () {
    return view('setting');
});
Route::get('/checkout.bc_setting','services@bc_getdata');

Route::get('/checkout.i_setting','services@i_getdata');

Route::get('/checkout.p_setting','services@p_getdata');

Route::get('/checkout.dl_setting','services@dl_getdata');
 
Route::get('/checkout.fr_setting','services@fr_getdata');

Route::get('/checkout.dc_setting','services@dc_getdata');

Route::get('/checkout.ds_setting','services@ds_getdata');

Route::get('/checkout.mc_setting','services@mc_getdata');

