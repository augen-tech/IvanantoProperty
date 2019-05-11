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
//     return view('app');
// });

Route::get('/', 'CompanyController@Index') ->name('company.index');

Route::get('/admin/dashboard/', 'AdminController@Index') ->name('admin.dashboard');

//Home
Route::get('/admin/home/index', 'HomeController@Index') ->name('admin.home.index');
Route::get('/admin/home/edit/{id}', 'HomeController@Edit') ->name('admin.home.edit');
Route::post('/admin/home/update/{id}', 'HomeController@Update') ->name('admin.home.update');

//Blockquote 
Route::get('/admin/blockquote/index', 'BlockquoteController@Index') ->name('admin.blockquote.index');
Route::get('/admin/blockquote/edit/{id}', 'BlockquoteController@Edit') ->name('admin.blockquote.edit');
Route::post('/admin/blockquote/update/{id}', 'BlockquoteController@Update') ->name('admin.blockquote.update');

//Megatext
Route::get('/admin/megatext/index', 'MegaTextController@Index') ->name('admin.megatext.index');
Route::get('/admin/megatext/edit/{id}', 'MegaTextController@Edit') ->name('admin.megatext.edit');
Route::post('/admin/megatext/update/{id}', 'MegaTextController@Update') ->name('admin.megatext.update');

//Contact
Route::get('/admin/contact/edit/{id}', 'ContactController@Edit') ->name('admin.contact.edit');
Route::post('/admin/contact/update/{id}', 'ContactController@Update') ->name('admin.contact.update');

//Benefit 
Route::get('/admin/benefit/index', 'BenefitController@Index') ->name('admin.benefit.index');
Route::get('/admin/benefit/edit/{id}', 'BenefitController@Edit') ->name('admin.benefit.edit');
Route::post('/admin/benefit/update/{id}', 'BenefitController@Update') ->name('admin.benefit.update');

//Video 
Route::get('/admin/video/index', 'VideoController@Index') ->name('admin.video.index');
Route::get('/admin/video/edit/{id}', 'VideoController@Edit') ->name('admin.video.edit');
Route::post('/admin/video/update/{id}', 'VideoController@Update') ->name('admin.video.update');

//Map 
Route::get('/admin/map/index', 'MapController@Index') ->name('admin.map.index');
Route::get('/admin/map/edit/{id}', 'MapController@Edit') ->name('admin.map.edit');
Route::post('/admin/map/update/{id}', 'MapController@Update') ->name('admin.map.update');

//Gallery 
Route::get('/admin/gallery/index', 'GalleryController@Index') ->name('admin.gallery.index');
Route::get('/admin/gallery/edit/{id}', 'GalleryController@Edit') ->name('admin.gallery.edit');
Route::post('/admin/gallery/update/{id}', 'GalleryController@Update') ->name('admin.gallery.update');
Route::get('/admin/gallery/create', 'GalleryController@Create') ->name('admin.gallery.create');
Route::post('/admin/gallery/store', 'GalleryController@Store') ->name('admin.gallery.store');
Route::get('/admin/gallery/destroy/{id}', 'GalleryController@destroy')->name('admin.gallery.destroy');


//FAQ 
Route::get('/admin/faq/index', 'FAQController@Index') ->name('admin.faq.index');
Route::get('/admin/faq/edit/{id}', 'FAQController@Edit') ->name('admin.faq.edit');
Route::post('/admin/faq/update/{id}', 'FAQController@Update') ->name('admin.faq.update');
Route::get('/admin/faq/create', 'FAQController@Create') ->name('admin.faq.create');
Route::post('/admin/faq/store', 'FAQController@Store') ->name('admin.faq.store');
Route::get('/admin/faq/destroy/{id}', 'FAQController@destroy')->name('admin.faq.destroy');

//Logo 
Route::get('/admin/logo/edit/{id}', 'LogoController@Edit') ->name('admin.logo.edit');
Route::post('/admin/logo/update/{id}', 'LogoController@Update') ->name('admin.logo.update');



