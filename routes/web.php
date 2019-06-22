<?php


// Job Route

Route::get('/job','JobController@joblist');
Route::get('/job/jobdetails/{id}','JobController@jobdetails');
Route::get('/job/create','JobController@create');
Route::post('/job/create','JobController@store');


//Job Category Route

Route::get('/jobcategory','JobCategoryController@index');
Route::get('/jobcategory/create','JobCategoryController@create');
Route::post('/jobcategory/create','JobCategoryController@store');
Route::get('/jobcategory/edit/{id}','JobCategoryController@edit');
Route::post('/jobcategory/edit/{id}','JobCategoryController@update');
Route::get('/jobcategory/delete/{id}','JobCategoryController@delete');


// Company Route

Route::get('/company','CompanyController@companylist');
Route::get('/company/create','CompanyController@create');
Route::post('/company/create','CompanyController@store');
Route::get('/company/edit/{id}','CompanyController@edit');
Route::post('/company/edit/{id}','CompanyController@update');
Route::get('/company/delete/{id}','CompanyController@delete');


// Applicant Route

Route::get('/applicant','ApplicantController@applicantlist');
Route::get('/applicant/applicantprofile/{id}','ApplicantController@applicantprofile');
Route::get('/applicant/create','ApplicantController@create');
Route::post('/applicant/create','ApplicantController@store');



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/job', 'JobController@joblist')->name('home');
