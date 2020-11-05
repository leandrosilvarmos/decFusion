<?php

namespace App\Http\Controllers;

use App\Produtos;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //


    public function index(){

        $users = User::get();
        $usersCount = $users->count();


        return view('admin.dashboard.index')->with('users' , User::all())->with('usersCount' , $usersCount);

   
        
    }
}
