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

Route::get('/', 'HomeController@Home')->middleware('loginCheck');

Route::get('/homeseo', 'HomeController@HomeSeo');

Route::get('/ragistion', 'RagistionController@Contact');
Route::post('/sendata', 'RagistionController@contactSend');

//         Logi in Page ///////////

Route::get('/Login', 'LoginControll@LoginIndex');
Route::post('/onLogin','LoginControll@onLogin');
Route::get('/Logout','LoginControll@Logout');

//  Search Route/////

Route::get('/Search','SearchController@SearchControll');


Route::get('/seo','HomePageControl@Homeseo');
Route::get('/videoDetailsPage/{id}/{videwName}','details@pageDetails');
Route::get('/showvideo','details@relatedvideo');


