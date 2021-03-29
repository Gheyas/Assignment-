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
// TO BE COPIED
Route::get('admin/logo', 'Admin\LogoController@index')->name('admin.logo.index');
Route::post('admin/logo/uploadImage', 'Admin\LogoController@uploadImage')->name('admin.logo.uploadImage');
Route::get('admin/logo/deleteImage/{image}', 'Admin\LogoController@deleteImage')->name('admin.logo.deleteImage');

Route::name('admin.')->group(function () {
    Route::resource('admin/business', 'Admin\BusinessController');
});
Route::get('admin/editText/business', 'Admin\BusinessController@editText')->name('admin.business.editText');
Route::post('admin/editText/business', 'Admin\BusinessController@updateText')->name('admin.business.updateText');

// Admin Auth
Route::get('admin/login', 'Admin\AuthController@showLoginForm')->name('login');
Route::post('admin/login', 'Admin\AuthController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Admin\AuthController@logout')->name('admin.logout');
Route::post('admin/changePassword', 'Admin\AdminController@changePassword')->name('admin.password.change');


// CMS
Route::get('admin', function(){
    return redirect(route('admin.slider.index'));
});
Route::get('admin/index', function(){
    return redirect(route('admin.slider.index'));
})->name('admin.index');


Route::get('admin/slider', 'Admin\SliderController@index')->name('admin.slider.index');
Route::post('admin/slider', 'Admin\SliderController@update')->name('admin.slider.update');

Route::get('admin/banner', 'Admin\BannerController@index')->name('admin.banner.index');
Route::post('admin/banner', 'Admin\BannerController@update')->name('admin.banner.update');
Route::get('admin/pageBanner', 'Admin\PageBannerController@index')->name('admin.pageBanner.index');
Route::post('admin/pageBanner', 'Admin\PageBannerController@update')->name('admin.pageBanner.update');
Route::get('admin/page', 'Admin\PageController@index')->name('admin.page.index');
Route::post('admin/page', 'Admin\PageController@update')->name('admin.page.update');

Route::name('admin.')->group(function () {
    Route::resource('admin/about', 'Admin\AboutController');
});
Route::name('admin.')->group(function () {
    Route::resource('admin/team', 'Admin\TeamController');
});
Route::get('admin/info', 'Admin\InfoController@index')->name('admin.info.index');
Route::post('admin/info', 'Admin\InfoController@update')->name('admin.info.update');

Route::get('admin/counter', 'Admin\CounterController@index')->name('admin.counter.index');
Route::post('admin/counter', 'Admin\CounterController@update')->name('admin.counter.update');
Route::get('admin/response', 'Admin\ResponseController@index')->name('admin.response.index');
Route::name('admin.')->group(function () {
    Route::resource('admin/option', 'Admin\OptionController');
});
Route::name('admin.')->group(function () {
    Route::resource('admin/optionItem', 'Admin\OptionItemController');
});
Route::get('admin/option/{option}/item/create', 'Admin\OptionItemController@create')->name('admin.optionItem.create');
Route::name('admin.')->group(function () {
    Route::resource('admin/productCategory', 'Admin\ProductCategoryController');
});
Route::name('admin.')->group(function () {
    Route::resource('admin/product', 'Admin\ProductController');
});
Route::name('admin.')->group(function () {
    Route::resource('admin/service', 'Admin\ServiceController');
});
Route::get('admin/editIndex/service', 'Admin\ServiceController@editIndex')->name('admin.service.edit.index');
Route::patch('admin/editIndex/service', 'Admin\ServiceController@updateIndex')->name('admin.service.update.index');

Route::name('admin.')->group(function () {
    Route::resource('admin/icon', 'Admin\IconController');
});

// Route::name('admin.')->group(function () {
//     Route::resource('admin/blog', 'Admin\BlogController');
// });
// Route::get('admin/editIndex/blog', 'Admin\BlogController@editIndex')->name('admin.blog.edit.index');
// Route::patch('admin/editIndex/blog', 'Admin\BlogController@updateIndex')->name('admin.blog.update.index');

Route::get('admin/contact', 'Admin\ContactController@index')->name('admin.contact.index');
Route::get('admin/contact/delete/{contact}', 'Admin\ContactController@destroy')->name('admin.contact.destroy');



// Front End Routes
Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/privacy', 'Front\HomeController@privacy')->name('privacy');
Route::get('/terms', 'Front\HomeController@terms')->name('terms');
Route::get('product', 'Front\ProductController@index')->name('product.index');
Route::get('product/{product}', 'Front\ProductController@show')->name('product.show');
Route::get('about/{about}', 'Front\AboutController@show')->name('about.show');
Route::get('team', 'Front\AboutController@showTeam')->name('team.index');
Route::get('services', 'Front\ServiceController@index')->name('service.index');
Route::get('services/{service}', 'Front\ServiceController@show')->name('service.show');
Route::get('business', 'Front\BusinessController@index')->name('business.index');
Route::get('business/{business}', 'Front\BusinessController@show')->name('business.show');
// Route::get('blog', 'Front\BlogController@index')->name('blog.index');
// Route::get('blog/{blog}', 'Front\BlogController@show')->name('blog.show');
Route::get('contact', 'Front\ContactController@index')->name('contact.index');
Route::post('contact', 'Front\ContactController@submit')->name('contact.submit');