<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
  public function create()

{
  return view('admin.index',compact('index'));

}


public function store()
 {
     if ($this->isPostRequest()) {
     $validator = $this->getLoginValidator();

     if ($validator->passes()) {
     $credentials = $this->getLoginCredentials();

     if (Auth::attempt($credentials)) {
        Session::flash('message', 'Welcome Sir!');
        return Redirect::to('/');
     }

     return Redirect::back()->withErrors([
 'invalid_credential' => ['Credentials invalid.']
 ]);
     } else {
        return Redirect::back()
      ->withInput()
      ->withErrors($validator);
    }
 }

 return View::make('admin.index');
 }
 //Check user’s post request
 protected function isPostRequest()
 {
     return Input::server('REQUEST_METHOD') == 'POST';
 }

 //Validate
 protected function getLoginValidator()
 {
    return Validator::make(Input::all(), [
         'email' => 'required|email',
        'password' => 'required'
    ]);
 }
 //Get Login Credentials
 protected function getLoginCredentials()
 {
   return [
        'email' => Input::get('email'),
        'password' => Input::get('password')
   ];
 }
 public function logout()
 {
    Auth::logout();
    Session::flash('message', 'Logout success sir!');
    return Redirect::to('/');
 }
}
