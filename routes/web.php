<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');



Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('townships', 'Admin\TownshipsController');
    Route::resource('patients', 'Admin\PatientsController');
    Route::post('patients_mass_destroy', ['uses' => 'Admin\PatientsController@massDestroy', 'as' => 'patients.mass_destroy']);
    Route::post('patients_restore/{id}', ['uses' => 'Admin\PatientsController@restore', 'as' => 'patients.restore']);
    Route::delete('patients_perma_del/{id}', ['uses' => 'Admin\PatientsController@perma_del', 'as' => 'patients.perma_del']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    // Route::get('patient/{id}/page2/', 'Admin\PageController@page2');




 
});


Route::resource('patients', 'PatientController');
Route::get('patients/{id}/page1/', 'PageController@page1');
Route::get('patients/{id}/page2/', 'PageController@page2');
Route::get('patients/{id}/page3/', 'PageController@page3');
Route::get('patients/{id}/page4/', 'PageController@page4');
Route::get('patients/{id}/page5/', 'PageController@page5');
Route::get('patients/{id}/page6/', 'PageController@page6');
Route::get('patients/{id}/page7/', 'PageController@page7');
Route::get('patients/{id}/page8/', 'PageController@page8');
Route::get('patients/{id}/page9/', 'PageController@page9');

Route::patch('patients/{id}/', 'PageController@update');