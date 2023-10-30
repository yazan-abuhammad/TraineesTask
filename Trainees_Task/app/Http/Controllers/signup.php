<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\signups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class signup extends Controller
{
    public function index()
    {
        return view("front.signup");
    }


    public function store(Request $request)
    {
        $data_input = $request->validate([
            'username' => 'required|min:8|max:255',
            'email' => 'required|email',
            'password' => [
                'required_with:confirm_password',
                'same:confirm_password',
                'regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).+$/',
                'min:12',
            ],
            'confirm_password' => 'required',
        ]);
        $user_data = new signups;
        $user_data->username = $data_input['username'];

        $user_data->email = $data_input['email'];

        $user_data->password = bcrypt($data_input['password']);
        $user_data->save();

        return redirect()->route('login');
    }
}
