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



Auth::routes();

Route::get('/','Auth\AdminLoginController@showLoginForm');
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('login');
Route::post('/login','Auth\AdminLoginController@login');


Route::get('/dashboard','Admin\AdminController@home');
Route::get('/logout','Auth\AdminLoginController@logout');
Route::resource('users', 'UsersController');
// Route::get('manage-department', 'department\ShowmanageDepartment@index');
 Route::get('manage_department', 'DepartmentController@index'); 
 Route::get('create_department', 'DepartmentController@show'); 
 Route::post('create_department', 'DepartmentController@store'); 
 Route::get('edit_department/{id}', 'DepartmentController@edit'); 
 Route::post('update_department', 'DepartmentController@update'); 

 Route::get('manage_designation', 'DepartmentController@designation');
 Route::get('create_designation', 'DepartmentController@showdesignation');
 Route::post('create_designation', 'DepartmentController@storedesignation');
 Route::get('edit_designation/{id}', 'DepartmentController@editdesignation'); 
 Route::post('update_designation', 'DepartmentController@updatedesig');

 Route::get('manage_event', 'DepartmentController@event');
 Route::get('create_event', 'DepartmentController@showevent');
 Route::post('create_event', 'DepartmentController@storeevent');
 Route::get('edit_event/{id}', 'DepartmentController@editevent');
 Route::post('update_event', 'DepartmentController@updateevent');

 Route::get('manage_employee', 'DepartmentController@employee');
 Route::get('create_employee', 'DepartmentController@showemployee');
 Route::post('create_employee', 'DepartmentController@storeemployee');
 //Route::post('create_employee', 'DepartmentController@storesalary');
 Route::get('edit_employee/{id}', 'DepartmentController@editemployee');
 Route::post('update_employee', 'DepartmentController@updateemployee');
// Route::put('edit/user/{id}','UsersController@update)

Route::get('manage_salary', 'DepartmentController@showsalary');
Route::get('manage', 'DepartmentController@showsalary');
//Route::get('manage_salary', 'DepartmentController@showsalary');




/* Route::get('/create',function(){
    App\User::create([
    'name'=>'walex',
    'username'=>'walex',
    'email'=>'walexdavid59@gmail.com',
    'password'=>bcrypt('111'),
    ]);
    }); */
  