<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use App\Models\role;
use App\Models\UserHasRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        if(auth()->user() != null){
            $userHasRole = UserHasRole::where('user_id',auth()->user()->id)->first();
            $roleBelong = role::find($userHasRole->role_id);
            $roleName = $roleBelong->name;
            return view('welcome',compact('roleName'));
        }
        return view('welcome');
    }
}
