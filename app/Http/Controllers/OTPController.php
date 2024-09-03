<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('otpgenerate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function generateOTP(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'otp' => 'required|string'
        ]);

          echo "<pre>"; print_r($request->all()); 
           die('');

        $otpuser = OTOMobile::where('phone', $request->phone)->first();
        if (!$otpuser) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $otpuser->name = $name;
        $otpuser->email = $email;

        // Generate OTP
        $otp = rand(100000, 999999); // Simple OTP generation
       
        // Save OTP to user's record
        $otpuser->otp = $otp;
        $otpuser->save();

        // Here you would normally send OTP via SMS or email
        // Mail::to($user->email)->send(new OTPMail($otp));

        return response()->json(['message' => 'OTP sent successfully']);
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'otp' => 'required|integer'
        ]);

        $user = User::where('phone', $request->phone)->first();
        if (!$user || $user->otp != $request->otp) {
            return response()->json(['message' => 'Invalid OTP'], 401);
        }

        // Clear OTP after successful verification
        $user->otp = null;
        $user->save();

        return response()->json(['message' => 'OTP verified successfully']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
