<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    public function savedoc(Request $request){
        echo "hello";
        $messages =[
            'email.required' => 'please enter the email',
            'email.exists' => 'email already exists',
            'email.email' => 'please enter valid email id',
            'password.required' => 'please enter the password',
            'password.min' => 'please enter atleast 6 characters',
            'password_confirm.required' => 'please enter the password again for confirmation',
            'password.confirmed' => 'password confirmation does not match'
        ];

        $data = $request->all();

        $validator = Validator::make($data,
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
                'password_confirm' => 'required|min:6'
            ],
            $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        else{
            $users = new User([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),
                'user_type' => $request->get('spl')
            ]);
            $users->save();
        }
    return redirect()->intended('/dashboard');
    }


}
