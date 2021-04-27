<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     * @param  RegisterRequest  $request
     * @return mixed
     */
    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'login' => $request->login,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'code' => rand(100000,900000),
            'password' => Hash::make($request->password),
        ]);

        //event(new Registered($user));

        Auth::login($user);

        $to_name = Auth::user()->name;
        $to_email = Auth::user()->email;
        $data = array('code'=>rand(100000,900000));
        Mail::send('email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Confirmation code for authorization!');
            $message->from("yulik15zaytpa@gmail.com",'Activation');
        });

        return redirect('code');
    }
}
