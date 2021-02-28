<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
class CustomerController extends Controller
{
    // show het
    public function index(){
        return customer::paginate(5);
    }
    // show 1 thang
    public function show($id){
        return customer::find($id);
    }

    //// tao nguoi dung moi
    public function store( Request $request){
        $customer = customer::create([
            'user_name' => $request->input('user_name'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'fullname' => $request->input('fullname'),
            'address' => $request->input('address'),
            'permission' => $request->input('permission'),
            'birthday' => $request->input('birthday'),
        ]);
        $customer->save();
            return response($customer, 200)
            ->header('Content-Type', 'text/plain');

    }

    // update
    public function update(Request $request, $id) {
        $customer = customer::find($id);
        $customer->update([
            'user_name' => $request->input('user_name'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'fullname' => $request->input('fullname'),
            'address' => $request->input('address'),
            'permission' => $request->input('permission'),
            'birthday' => $request->input('date'),
        ]);
        $customer->save();
            return response($customer, Response::HTTP_ACCEPT);
    }

}
