<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.login');
    }

    /**
     * authenticate admin login user method.
     */
    public function authenticate(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if($validator->passes()){
    
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){

                if(Auth::guard('admin')->user()->role != "admin"){
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error','You are not authorized to access this page');
                }

                return  redirect()->route('admin.dashboard');
    
            }else {
                return redirect()->route('admin.login')->with('error','Either Email and passowrd is incorrect');
    
            }
    
        }else{
    
            return redirect()->route('admin.login')->withInput()->withErrors($validator);
        }
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout(){

        Auth ::logout();

        return view('admin.login');      
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
