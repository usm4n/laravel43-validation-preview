<?php namespace App\Http\Controllers;

use Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\UserFormRequest;

class UsersController extends Controller {

    public function getRegister()
    {
        return view('master')->nest('content','register');
    }

    public function postRegister(UserFormRequest $request)
    {
        //$user = new User;
        //$user->username = $request->username;
        //...
        //...
        //$user->save();
        return Response::make('Registration successful!');
    }
}