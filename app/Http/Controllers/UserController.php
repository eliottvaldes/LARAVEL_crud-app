<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    // add a new method to the controller

    // function to the index
    public function index(){

        // $users = DB::select('select * from users');
 
        // return view('users.index', ['users' => $users]);

        // get all users to show
        $users = User::latest()->get();

        // return the view
        return view(
            // here set the folder.file
            'users.index',
            [
                'users' => $users
            ]
        );

    }

    // function to store user data
    // it's a post func, so get the Request params
    public function store(Request $request){
        // use the file that represent aur user table

        User::create(            
            [
                // here set the data that we need to store an user
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            // return the previus view
            return back();

    }

    // function to delete users
    // recieve an user
    public function destroy(User $user){

        // delete user and return to the previoud view
        $user->delete();

        return back();
        
    }
}
