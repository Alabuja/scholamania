<?php
// URL::forceSchemE('https');
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
Auth::routes();
Route::group(['middleware' => ['guest']], function(){
	 
	Route::get('/', function () {
	    return view('welcome'); 
	});
	Route::get('/faq', function(){
		return view('faq');
	});
	Route::get('/contact', function(){
		return view('contact');
	});
	Route::get('/term', function(){
		return view('terms');
	});

	/**
	* New Guest Users
	*/
	Route::get('newregister', 'RegisterUserController@getGuest');
	Route::post('newregister', 'RegisterUserController@initiate');
	Route::get('paystack-callback', 'RegisterUserController@verify');
	// Route::get('success', [
	//     'uses' => '\App\Http\Controllers\RegisterUserController@verify',
	//     'as'   => 'attempts.success',
	//     'middleware' => ['guest']
	// ]);

	 // ADMIN
    Route::get('admin/login', 'Admin\Auth\LoginController@getLoginForm');
    Route::get('admin', 'Admin\Auth\LoginController@getLoginForm');
    Route::post('admin/authenticate', 'Admin\Auth\LoginController@authenticate');
    Route::post('admin/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail');
  	Route::post('admin/password/reset', 'Admin\Auth\ResetPasswordController@reset');
    Route::get('admin/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm');
    Route::get('admin/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');

    /**
    * Individuals (Guest)
    */

    Route::get('individual/login', 'Individuals\Auth\LoginController@getLoginForm');
    Route::get('individual', 'Individuals\Auth\LoginController@getLoginForm');
    Route::post('individual/authenticate', 'Individuals\Auth\LoginController@authenticate');
    Route::post('individual/password/email', 'Individuals\Auth\ForgotPasswordController@sendResetLinkEmail');
  	Route::post('individual/password/reset', 'Individuals\Auth\ResetPasswordController@reset');
    Route::get('individual/password/reset', 'Individuals\Auth\ForgotPasswordController@showLinkRequestForm');
    Route::get('individual/password/reset/{token}', 'Individuals\Auth\ResetPasswordController@showResetForm');
    
});
Route::group(['middleware' => ['admin']], function(){


	Route::get('admin/dashboard', function() {
		return view('admin.welcome');
	});
	Route::get('admin/users', function() {
		return view('admin.newcoach');
	});
	Route::get('admin/update', function() {
		return view('admin.update');
	});
	Route::get('admin/resources', function() {
		return view('admin.resource');
	});
	// Route::get('admin/coach', function() {
	// 	return view('admin.addcoach');
	// });

	/**
	* Individuals 
	*/
		Route::get('admin/individuals/all', 'Individuals\UserController@getAll');
		Route::get('admin/individuals', 'Individuals\UserController@addNewUsers');
		Route::post('admin/individuals', 'Individuals\UserController@store');
		Route::get('admin/individuals/{id}', 'Individuals\UserController@getSingle');

		Route::get('admin/individual/assignment', 'Individuals\AssignmentController@getAssignments');
		// Route::post('admin/individual/assignment', 'Individuals\AssignmentController@store');

		Route::get('admin/individual/score', 'Individuals\ScoreController@index');
		Route::post('admin/individual/score', 'Individuals\ScoreController@store');

		Route::get('admin/individual/resources', 'Individuals\ResourceController@getResources');
		Route::post('admin/individual/resources', 'Individuals\ResourceController@store');


	/**
	* End Individuals
	*/

	Route::get('admin/centers', 'Admin\AdminFrontController@getUsers');
	Route::get('admin/assignment', 'Admin\AdminFrontController@getAssignments');
	Route::get('admin/score', 'Admin\ScoreController@index');
	Route::post('admin/score', 'Admin\ScoreController@store');

	Route::post('admin/users', 'UserController@store');
	Route::post('admin/resources', 'Admin\ResourceController@store');
	Route::post('admin/update', 'Admin\AdminFrontController@postUpdatePassword');
    Route::post('admin/logout', 'Admin\Auth\LoginController@getLogout');
    Route::get('admin/coach', 'CoachController@index');
    Route::get('admin/coaches_view', 'CoachController@getCoaches');
    Route::post('admin/coach', 'CoachController@create');
    Route::get('admin/coach/{id}', 'CoachController@edit');
	Route::post('admin/coach/{id}', 'CoachController@update');
    Route::get('admin/users/{id}', function($id){

    	$user = DB::table('users')->find($id);

    	return view('admin.singlecoach', compact('user'));
    });

});
Route::get('/home', 'HomeController@index');
Route::get('update', 'HomeController@updateUser');
Route::get('students', 'StudentController@getStudents');
Route::post('students', 'StudentController@postStudents');
Route::get('assignment', 'AssignmentController@getAssignment');
Route::post('assignment', 'AssignmentController@postAssignment');
Route::post('update', 'UpdateController@postUpdatePassword');
Route::get('resources', 'HomeController@getResources');
Route::get('profile', 'HomeController@profile');
Route::post('updateprofile', 'HomeController@updateprofile');
// Route::get('coach', 'CoachController@index');
// Route::post('coach', 'CoachController@create');
// Route::get('coach/{id}', 'CoachController@edit');
// Route::post('coach/{id}', 'CoachController@update');


Route::group(['middleware' => ['individual']], function(){
	Route::post('individual/logout', 'Individuals\Auth\LoginController@getLogout');
	Route::get('individual/home', 'Individuals\HomeController@index');
	Route::get('individual/resource', 'Individuals\ResourceController@getUsersResources');
	Route::get('individual/update', 'Individuals\UpdateController@updateUsers');
	Route::get('individual/assignment', 'Individuals\AssignmentController@getUsersAssignment');
	Route::get('individual/profile', 'Individuals\ProfileController@profile');
	Route::post('individual/updateprofile', 'Individuals\ProfileController@updateprofile');
	Route::post('individual/update', 'Individuals\UpdateController@postUpdatePassword');
	Route::post('individual/assignment', 'Individuals\AssignmentController@postAssignment');
	// Route::get('staff/home', 'Staff\StaffController@home');
});