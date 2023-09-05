<?php 
namespace App\Services;

use App\Models\role;
use App\Models\UserHasRole;

class MyService{
    public function getRole(){
        $userHasRole = UserHasRole::where('user_id',auth()->user()->id)->first();
        $roleBelong = role::find($userHasRole->role_id);
        $roleName = $roleBelong->name;
        return $roleName;
    }
}
?>