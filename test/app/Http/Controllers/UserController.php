<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * @param Request $req
     * @return mixed
     */
    public function userVerifyCode(Request $req){
        $user = User::find(Auth::user()->id);
            if($req->code==$user->code){
                $user->email_verified_at = now();
                $user->save();
                return redirect('dashboard');
            } else
                return redirect('code');
    }
}
