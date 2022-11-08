<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\User;

class LoginTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tenantRegister(Request $request) {
            // return $request;
            $user = new User();
            $user->name = $request->input('name');
            $user->email =  $request->input('email');
            $user->password = $request->input('password');
            // $user->photo = '';
           //return $user;
            $user->save();
            //return $user;
    }
    public function tenatnLogin(Request $request){
        return $request;
    }
   
}
