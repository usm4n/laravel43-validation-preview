<?php namespace App\Http\Requests;

use Response;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest {

    public function rules()
    {
        return [
            'username' => 'required|alpha_dash',
            'email'    => 'required|email',
            'password' => 'required|between:8,20|confirmed',
            'age'      => 'required|integer|max:60'
        ];
    }

    public function authorize()
    {
        if($this->age > 15)
            return true;
        else 
            return false;
    }

    public function forbiddenResponse()
    {
        return Response::make('You are too young to register!',403);
    }

}