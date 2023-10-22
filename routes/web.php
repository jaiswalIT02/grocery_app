<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'login');
    Route::post('/doLogin', 'doLogin');
    Route::get('/admin', 'admin')->name('admin');
    Route::get('/user', 'user')->name('user');
    Route::get('/addUser', 'addUser')->name('addUser');
    Route::post('/storeUser', 'storeUser')->name('storeUser');
    Route::get('/deleteUser/{id}', 'deleteUser')->name('deleteUser');
    Route::get('/userRole', 'userRole')->name('userRole');
    Route::get('/addUserRole', 'addUserRole')->name('addUserRole');
    Route::post('/storeUserRole', 'storeUserRole')->name('storeUserRole');
    Route::get('logout', 'logout')->name('logout');
    Route::get('checkLogin', 'checkLogin')->name('checkLogin');
    Route::get('index', 'index')->name('index');
});

/*---- */

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/viewUser', [App\Http\Controllers\HomeController::class, 'viewUser'])->name('viewUser');
//Route::get('/createUser', [App\Http\Controllers\HomeController::class, 'createUser'])->name('createUser');
//Route::post('/storeUser', [App\Http\Controllers\HomeController::class, 'storeUser'])->name('storeUser');
//Route::get('/deleteUser/{id}', [App\Http\Controllers\HomeController::class, 'deleteUser'])->name('deleteUser');
//Route::get('/updateUser/{id}', [App\Http\Controllers\HomeController::class, 'updateUser'])->name('updateUser');
Route::get('/test/{id}', function (string $id) {
    return 'User '.$id;
});