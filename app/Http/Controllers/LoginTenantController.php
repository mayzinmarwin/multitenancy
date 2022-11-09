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
    public function tenantLogin(Request $request){
        //return $request;
        $email = $request->post('email');
        $password = $request->post('password');
        //return $name;
        $user = User::where('email', $email)->firstOrFail();
        //return $user;
        if($user) {
            $email = $user->email;
            $name = $user->name;
            $password = $user->password;
        }
        $view = view('tenantwelcome')->with('name', $name)
                                    ->with('email', $email)
                                    ->with('password',$password)->render();

        return response()->json(['html'=>$view]);
        //return $name;
    }
    public function tenanatUpdate(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        $user->name = $name;
        $user->email = $email;
        $user->password =$password;
        $user->save();    
    }
   
}
