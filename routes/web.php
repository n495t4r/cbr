<?php

use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;
use App\User;
use Spatie\QueryBuilder\AllowedFilter;

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
    // $result = QueryBuilder::for(User::class)
    //                         ->allowedFilters(['name',
    //                                         'email', 
    //                                         AllowedFilter::exact('id'), 
    //                                         AllowedFilter::scope('verified')])
    //                         ->get();
    //                         return $result;

    return view('welcome');
});

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin', function() {
   
    return view('home');
    

})->name('home')->middleware('auth');

Route::get('/admin/settings', function() {
    return view('admin.settings');
})->name('admin.settings')->middleware('auth');

// Route::get('admin/monitors', 'MonitorsController@index')->name('view_monitors');
// Route::resource('/admin/monitors', 'Admin\MonitorsController', ['as'=>'admin']);

Route::resource('/admin/organisations', 'Admin\OrganisationController', ['as'=>'admin']);
Route::resource('admin/programmes', 'Admin\ProgrammeController', ['as'=>'admin']);
Route::resource('admin/interventions', 'Admin\InterventionController', ['as'=>'admin']);
Route::resource('admin/beneficiaries', 'Admin\BeneficiaryController', ['as'=>'admin']);
Route::resource('admin/search', 'Admin\SearchController', ['as'=>'admin']);
//Route::resource('admin/find/beneficiaries', 'Admin\SearchController', ['as'=>'admin']);
Route::resource('admin/audit', 'Admin\auditController', ['as'=>'admin']);

Route::get('admin/users', function(){
    return view('admin.users.index');
});

// Route::get('admin/audit', function(){
//     return view('admin.audit');
// });


