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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/profile', 'PagesController@profile');
Route::get('page/{id}/editProfile', 'PagesController@edit');
Route::match(['put','patch'],'page/{id}/update', 'PagesController@update');
Route::get('/apply', 'PagesController@apply');

Route::resource('proposalPage', 'ProposalController');
Route::resource('proposal2Page','Proposal2Controller');
Route::resource('calendar', 'EventController');
// Route::post('calendar/editevent', 'EventController@show');

//Route::get('/', 'ProposalController@index');
//Route::get('/edit/{id}', 'ProposalController@edit');
//Route::get('/show/{id}', 'ProposalController@show');
//Route::get('/create', 'ProposalController@create');
//Route::post('/store', 'ProposalController@store');
//Route::post('/update/{id}', 'ProposalController@update');


  // Route::prefix('admin')->group(function() 
  // {
    Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
  // });

  Route::get('send-mail','MailSend@mailsend');

  Route::get('UK/login', 'Auth\UKLoginController@showLoginForm')->name('UK.login');
  Route::post('/UK/login', 'Auth\UKLoginController@login')->name('UK.login.submit');
  Route::get('/UK', 'UKController@index')->name('UK.dashboard');
  Route::resource('uk','UKController');


  Route::resource('adminUpdate','AdminController');
  Route::get('adminUpdate/{id}/edit2','AdminController@edit2');
  Route::match(['put','patch'],'adminUpdate/{id}/update2','AdminController@update2');



  