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


Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/services', 'SiteController@services')->name('site.services');
Route::get('/services/{service}/details', 'SiteController@details')->name('site.details');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('/contact-us');
});

Route::get('/send-message', 'EmailController@send');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Categories Routes
 */
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('/categores/{category}/update', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{category}/delete', 'CategoryController@destroy')->name('categories.destroy');

/**
 * Advertises Routes
 */
Route::get('/advertises', 'AdvertiseController@index')->name('advertises.index');
Route::get('/advertises/create', 'AdvertiseController@create')->name('advertises.create');
Route::post('/advertises', 'AdvertiseController@store')->name('advertises.store');
Route::delete('/advertises/{advertise}', 'AdvertiseController@destroy')->name('advertises.destroy');

Route::get('advertises/image/{fileName}', 'AdvertiseController@displayImage')->name('advertises.displayImage');

/**
 * Gallery Routes
 */
Route::get('/galleries', 'GalleryController@index')->name('galleries.index');
Route::get('/galleries/create', 'GalleryController@create')->name('galleries.create');
Route::post('/galleries', 'GalleryController@store')->name('galleries.store');
Route::get('/galleries/{gallery}/edit', 'GalleryController@edit')->name('galleries.edit');
Route::put('/galleries/{gallery}/update', 'GalleryController@update')->name('galleries.update');
Route::get('/galleries/{gallery}/images', 'GalleryController@images')->name('galleries.images');
Route::delete('/galleries/{gallery}/delete', 'GalleryController@destroy')->name('galleries.destroy');

/**
 * Gallery Images Routes
 */
Route::post('/images', 'GalleryImageController@store')->name('images.store');
Route::delete('/images/{galleryImage}/delete', 'GalleryImageController@destroy')->name('images.destroy');

Route::get('galleries/image/{fileName}', 'GalleryImageController@displayImage')->name('galleries.displayImage');

/**
 * Packages Routes
 */
Route::get('/packages', 'PackageController@index')->name('packages.index');
Route::get('/packages/create', 'PackageController@create')->name('packages.create');
Route::post('/packages', 'PackageController@store')->name('packages.store');
Route::get('/packages/{package}/features', 'PackageController@features')->name('packages.features');
Route::get('/packages/{package}/edit', 'PackageController@edit')->name('packages.edit');
Route::put('/packages/{package}/update', 'PackageController@update')->name('packages.update');
Route::delete('/packages/{package}/delete', 'PackageController@destroy')->name('packages.destroy');

/**
 * Features Routes
 */
Route::post('/features', 'FeatureController@store')->name('features.store');
Route::get('/features/{feature}/edit', 'FeatureController@edit')->name('features.edit');
Route::put('/features/{feature}/update', 'FeatureController@update')->name('features.update');
Route::delete('/features/{feature}/delete', 'FeatureController@destroy')->name('features.destroy');
