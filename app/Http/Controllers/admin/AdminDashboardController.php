<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexadmin()
    {
        // Count the number of users
       $users = User::count();

       // Pass the data to the view
       return view('admin.dashboard', compact('users'));    
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showUsers()
    {
        $users = User::count(); // Count the number of users
        return view('admin.dashboard', compact('users')); // Pass the count to the view
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
