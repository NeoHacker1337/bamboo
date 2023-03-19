<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    
    public function login()
    {
        return view('backend.admin.auth.login');
    }

    public function loginSubmit(Request $request)
    {
        $rules = [
            'email'   => 'required',
            'password' => 'required|min:6'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('result' => false, 'msg' => $validator->errors()->first()));
        }

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('admin/dashboard')]);
        } else {

            return response()->json(array('status' => false, 'msg' => "Credentials not matched !"));
        }
    }

    public function dashboard()
    {
        return view('backend.admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    

}
