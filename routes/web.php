<?php

use Illuminate\Support\Facades\Route;

Route::get('/','ProductController@view')->name('index');
Route::get('/marco-bamboo/dashboard', function () {
    return view('dashboardlayout');
})->middleware('auth')->name('dashboard');




Route::post('/form-submitted','FormController@submit')->name('form.submit');
Route::get('/marco-bamboo/dashboard/form-data' , 'FormController@formdata')->middleware('auth')->name('form.data');



Route::get('about-us','FormController@aboutUs')->name('about.us');



Route::get('/marco-bamboo/dashboard/products',function() {
	return view('products.create-home-product');
})->middleware('auth')->name('create.product');
Route::post('/marco-bamboo/dashboard/products/created', 'ProductController@create')->name('product.create');
Route::get('/marco-bamboo/dashboard/products/view', 'ProductController@viewAdminProducts')->middleware('auth')->name('product.admin.view');
Route::post('/marco-bamboo/dashboard/products/delete/{name}', 'ProductController@delAdminProduct')->name('product.delete');
Route::get('/product/{name}', 'ProductController@productsView')->name('single.product.view');
Route::get('/marco-bamboo/dashboard/slides','ProductController@createSlides')->middleware('auth')->name('slide.create');
Route::post('/marco-bamboo/dashboard/slides/created','ProductController@createdSlides')->name('slide.created');
Route::get('/marco-bamboo/dashboard/admin/slides/{name}','ProductController@viewAdminSlides')->middleware('auth')->name('slide.admin.view');
Route::post('/marco-bamboo/dashboard/products/slide/delete/{id}', 'ProductController@delAdminProductSlide')->name('product.slide.delete');





Route::group(['prefix' => 'policies'], function(){
	Route::get('/privacy-policy', function(){
		return view('policies.privacy');
	})->name('policies.privacy');
	Route::get('/terms-and-conditions', function(){
		return view('policies.termsconditions');
	})->name('policies.termsconditions');
});




Route::get('/blog', 'BlogController@view')->name('blog.main.view');
Route::get('/marco-bamboo/dashboard/blog', 'BlogController@adminView')->middleware('auth')->name('blog.view');
Route::get('/blog/{path}' , 'BlogController@blogview')->name('blog.post.view');
Route::get('/marco-bamboo/dashboard/create-blog', function () {
    return view('blog.create');
})->middleware('auth')->name('create.blog');




Route::post('/blog/post/create', 'BlogController@create')->name('blog.create');
Route::post('/blog/post/delete/{id}', 'BlogController@del')->name('blog.delete');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
