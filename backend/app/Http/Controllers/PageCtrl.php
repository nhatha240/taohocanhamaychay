<?php

namespace App\Http\Controllers;
use App\Models\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\Factory;
class PageCtrl extends Controller
{
    public function index(){
        $mm = 'ádasdasdasd';
        return response()->json([$mm]);
        // return view('welcome');
    }
}
