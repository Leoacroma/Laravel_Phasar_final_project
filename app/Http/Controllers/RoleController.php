<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    //
    public function userConfi(){
        // $users=DB::select("select * from users");
        // return $users;
        if (Auth::user()->role == 'admin') {
            # code...
            return view('adminDashboard.home');
        }elseif (Auth::user()->role == 'seller') {
            # code...
            return view('Dashboard.home');
        }
        
    }
    public function usermanage(){
        $users = DB::table('users')->get();
        return view('admindashboard.usermanagment',[ 'users' => $users] );
    }
}
