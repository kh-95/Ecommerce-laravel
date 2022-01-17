<?php

namespace App\Http\Controllers\Admin;

use App\Admin ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mail\AdminResetPassword;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Mail ;


class Adminauth extends Controller
{


    public function login(){

        return view('admin.login');
        
    }

    public function dologin(){


$remeber=request('remeber_me') ==1 ? true:false;

if(auth()->guard('admin')->attempt([

    'email'=>request('email'),
'password'=>request('password'),
],$remeber)){

    return redirect('admin/home');


}else{


    session()->flash('error','email or password is incorrect');
    return redirect('admin/login');
}



    }

public function logout(){


auth()->guard('admin')->logout();

return redirect('admin/login');

}

public function forgetpassword (){

return view ('admin.forgetpassword');
}



public function resend(){

    $admin=Admin::where('email',request('email'))->first();
if(!empty($admin)){
    $token=app('auth.password.broker')->createToken($admin);

    $data=DB::table('password_resets')->insert([
     
        'email'=>$admin->email,    
        'token'=>$token,
        'created_at'=> Carbon::now(),


    ]);
  return new AdminResetPassword(['data'=>$admin , 'token'=>$token]);


}

return back();

}

}
