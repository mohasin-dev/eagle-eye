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

// Route::get('/', function () {
//     return view('welcome');
// });


//Frontend Route
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/knit-product', 'HomeController@knitproduct')->name('knit.product');
Route::get('/woven-product', 'HomeController@wovenProduct')->name('woven.product');
Route::get('/safety-product', 'HomeController@safetyProduct')->name('safety.product');
Route::get('/school-product', 'HomeController@schoolProduct')->name('school.product');
Route::get('/fleece-product', 'HomeController@fleeceProduct')->name('fleece.product');
Route::get('/product-range', 'HomeController@productRange')->name('product.range');
Route::get('/our-strength', 'HomeController@ourStrength')->name('our.strength');
Route::get('/operation-steps', 'HomeController@operation')->name('operation');
Route::get('/quality-control', 'HomeController@qualityControl')->name('quality.control');
Route::get('/support', 'HomeController@support')->name('support');
Route::get('/carrer', 'HomeController@carrer')->name('carrer');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/our-concerns', 'HomeController@ourConcerns')->name('our.concerns');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::resource('category','CategoryController');
    Route::resource('subcategory','SubcategoryController');
    Route::resource('brand','BrandController');
    Route::resource('tag','TagController');
    Route::resource('unit','UnitController');
    Route::resource('size','SizeController');
    Route::resource('color','ColorController');
    Route::resource('product','ProductController');
    Route::resource('fontAwesome','FontAwesomeController');
    Route::resource('service','ServiceController');
    Route::resource('about','AboutController');
    Route::resource('testimonial','TestimonialController');
    Route::resource('client','ClientController');
    Route::resource('whychooseus','WhyChooseUsController');
    Route::resource('slider','SliderController');



});



Auth::routes();
