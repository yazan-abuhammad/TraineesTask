<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        $data = users::all();
        return view('admin.Users', compact('data'));
    }

    // public function user(){
    //     $user = users::where('id' , session('id'));
    //     return view('user', ['user' => $user]);

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $user = users::where('id', 1)->get();

        return view('user', ['user' => $user]);
    }


    public function edit()
    {
        $user = users::where('id', 1)->get();

        return view('edit', ['user' => $user]);
    }


    public function userp()
    {
        $user = users::where('id', 2)->get();

        return view('user', ['user' => $user]);
    }






    public function createA(Request $request)
    {
        $usr = new users();
        $usr->username    = $request->input('user_username');

        $usr->password    = bcrypt($request->input('user_pass'));
        $usr->email    = $request->input('user_email');

        $usr->save();
        return redirect('/AdminUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editA($id, $status)
    {
        $usr = users::find($id);
        $usr->is_admin = $status;
        $usr->update();
        return redirect('/AdminUser');
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */




    //     $user->save();

    //     return redirect('user');
    // }


    public function updateuser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',


        ]);



        $user = users::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $user->username = $request->input('name');

        $user->email = $request->input('email');




        $user->save();

        return redirect()->route('user_profile');
    }







    public function useredit($id)
    {
        $user = Users::where('id', $id)->get();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }



        return view('edit', compact('user'));
    }
}
