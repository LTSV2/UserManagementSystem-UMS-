<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function indexdashboard(){

       // Count the number of users
       $users = User::count();

       // Pass the data to the view
       return view('dashboard', compact('users'));    

    }

      public function showUsers()
        {
            $users = User::count(); // Count the number of users
            return view('dashboard', compact('users')); // Pass the count to the view
        }
    
}
