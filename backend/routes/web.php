<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCtrl; ####### dùng controler nào thì thêm vào
use App\Http\Controllers\CustomerController;
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
// Route::get('/',  function () {
//     return $;
// });

// Route::get('/',  [PageCtrl::class, 'index']);
Route::get('/cus/all',  [CustomerController::class, 'index']);
Route::get('/cus/{id}',  [CustomerController::class, 'show']);
Route::get('/',  function () {
        return view('signup');
    } ) ;
Route::post('cus/add',  [CustomerController::class, 'store'])->name('user.add');
Route::put('/cus/{id}',  [CustomerController::class, 'update']);
Route::delete('/cus/{id}',  [CustomerController::class, 'delete']);
// Route::delete('/cus/{id}',  [CustomerController::class, 'sortdelete']);



