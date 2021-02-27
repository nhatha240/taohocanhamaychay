<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCtrl; ####### dùng controler nào thì thêm vào

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


// Route::get('/',  [PageCtrl::class, 'index']); ######### PageCtrl::class này là call class controller đã thêm vào index là tên function
Route::get('/',  function () {
    return view('welcome');
});
