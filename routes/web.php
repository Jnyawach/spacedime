<?php

use App\Portfolio;
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

Route::get('/', function () {
    $projects=Portfolio::latest()->take(4)->get();
    return view('welcome', compact('projects'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact',['as'=>'contact', 'uses'=>'PagesController@contact']);
Route::get('about',['as'=>'about', 'uses'=>'PagesController@about']);
Route::get('portfolio',['as'=>'portfolio', 'uses'=>'PagesController@portfolio']);
Route::get('project/{id}',['as'=>'project', 'uses'=>'PagesController@project']);
Route::get('services',['as'=>'services', 'uses'=>'PagesController@services']);
Route::get('architecture',['as'=>'architecture', 'uses'=>'PagesController@architecture']);
Route::get('survey',['as'=>'survey', 'uses'=>'PagesController@survey']);
Route::get('planning',['as'=>'planning', 'uses'=>'PagesController@planning']);
Route::get('environment',['as'=>'environment', 'uses'=>'PagesController@environment']);
Route::resource('quote', 'RequestQuoteController');
Route::resource('contact-us', 'ContactController');

Route::group(['middleware'=>'role'], function () {
    Route::resource('/admin', 'AdminController');
    Route::resource('admin/homepage/portfolio', 'AdminPortfolioController');
    Route::resource('admin/homepage/quotation', 'AdminQuoteController');
    Route::resource('admin/homepage/enquiry', 'AdminContactController');
});


