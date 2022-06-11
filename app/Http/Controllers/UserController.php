<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function ShowDetails()
    {
        $customers = Customer::all();

        return view('user.details')->with('customers',$customers);
    }

    public function userregistration(Request $req)
    {
        $this->validate($req,
            [
                "name"=>"required|alpha",
                "email"=>"required",
                "password"=>"required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/",
                "confirmpassword"=>"required|min:8|same:password"
            ]
        
            );
            $ct = new Customer();
            $ct->name = $req->name;
            $ct->email =$req->email;
            $ct->password = $req->password;
            $ct->save();
        return "Form submitted";
    }
    
}
