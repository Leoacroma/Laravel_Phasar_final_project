<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function imageStore(Request $req){
        
        if ($req -> image){
            $image_name = time().'.'.$req -> image -> getClientOriginalName();
            $req -> image -> move(public_path('uploads\avatars'), $image_name);
            $user = Auth::user();
            $user -> avatar = $image_name;
            $user -> save();
        }

        return back();
    }
}
