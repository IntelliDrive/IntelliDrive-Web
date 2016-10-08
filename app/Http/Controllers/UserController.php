<?php

namespace App\Http\Controllers;

use Response;
use DB;
use Auth;
use App\User;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Provides login api for android app.
     *
     * @return json object consisting of token => value.
     */
    public function login()
    {
        $userdata = array(
	    'email'    => Input::get('email'),
            'password' => Input::get('password')
        );

        $rules = array(
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        );

        $validator = Validator::make($userdata, $rules);

        if (Auth::attempt($userdata)) {
            // Return Token
            $token = str_random(100);
            DB::insert('update users set app_token=? where email=?',[$token,$userdata['email']]); 

            return Response::json(['token' => $token],200);         
        } else {
            // Return Fail
            return Response::json(['token' => ''],400);        
        }
    }

    /**
     * Provides a user registration api for android app.
     *
     * @return jsone array with status message msg = message.
     */
    public function register()
    {
        $userdata = array(
            'name'     => Input::get('name'),
	    'email'    => Input::get('email'),
            'password' => Input::get('password')
        );

       $userdata['password'] = Hash::make($userdata['password']);
       try {
           $user = User::create($userdata);
       } catch (Exception $e) {
           return Response::json(['msg' => 'User already exists.'], 400);
       }
           return Response::json(['msg' => 'Account Created'], 200);
    }
}
