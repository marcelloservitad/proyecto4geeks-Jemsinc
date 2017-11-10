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

Route::get('/', function () {
    return view('proyecto');
});

route::get('/formulario' , function(){
	return view('formulario');
});

Route::get('/ingreso', function() {
return view('ingreso');
});

Route::get('/metal_gear_phantom_pain', function(){
return view('metal_gear_phantom_pain');
});

Route::get('/resenas', function() {
return view('resenas');
});

Route::get('/tom_clancy_the_division', function() {
return view('tom_clancy_the_division');
});

Route::get('/rwby_s1', function() {
return view('rwby');
});

Route::get('/recomendados', function() {
return view('recomendados');
});

Route::get('/noticias_diaria_1', function() {
return view('noticias_diaria_1');
});

Route::get('/noticias_diaria_2', function() {
return view('noticias_diaria_2');
});

Route::get('/noticias_diaria_3', function() {
return view('noticias_diaria_3');
});

Route::get('/tienda', function() {
return view('tienda');
});

Route::get('/productos', function() {
return view('productos');
});

Route::get('/empresa', function() {
return view('empresa');
});

Route::get('/bf4', function() {
return view('bf4');
});

Route::get('/rwby_s1', function() {
return view('rwby_s1');
});

Route::get('/mgs_v_g', function() {
return view('mgs_v_g');
});

Route::get('/metal_gear_v_juego', function() {
return view('metal_gear_v_juego');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'UserLoginController@getUserLogin');
    Route::post('login', ['as'=>'user.auth','uses'=>'UserLoginController@userAuth']);
    Route::get('admin/login', 'AdminLoginController@getAdminLogin');
    Route::post('admin/login', ['as'=>'admin.auth','uses'=>'AdminLoginController@adminAuth']);
    Route::group(['middleware' => ['admin']], function () {
        Route::get('admin/dashboard', ['as'=>'admin.dashboard','uses'=>'AdminController@dashboard']);
    });
});*/

/************************************************************************************************** DASHBOARD ***********************************************************************/

Route::get('admin/dashboard', function() {
return view('admin.dashboard');
});

Route::get('admin/icons', function() {
return view('admin.icons');
});

Route::get('admin/maps', function() {
return view('admin.maps');
});

Route::get('admin/notifications', function() {
return view('admin.notifications');
});

Route::get('admin/table', function() {
return view('admin.table');
});

Route::get('admin/typography', function() {
return view('admin.typography');
});

Route::get('admin/upgrade', function() {
return view('admin.upgrade');
});

Route::get('admin/user', function() {
return view('admin.user');
});

Route::resource('Juegos' , 'JuegosController');
Route::resource('Categorias' , 'CategoriasController');

Route::get('admin/categorias-form', function(){
return view('admin.categorias-form');
});
Route::post('admin/categorias-store', 'CategoriasController@store' );

Route::post('admin/juegos-store', 'JuegosController@store' );
Route::get('admin/juegos-form', function(){
return view('admin.juegos-form');
});

Route::post('admin/consolas-store', 'ConsolasController@store' );
Route::get('admin/consolas-form', function(){
return view('admin.consolas-form');
});

Route::get('admin/categorias-create-dashboard', function(){
return view('admin.categorias-create-dashboard');
});
Route::get('admin/consolas-index' , function(){
return view('admin/consolas-index');

});

Route::get('admin/consolas-create', function(){
return view('admin.consolas-create');
});
Route::get('admin/juegos-create', function(){
return view('admin.juegos-create');
});