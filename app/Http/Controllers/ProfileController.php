<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        return view('profile', ['user' => $user]);
    }

    public function view_users()
    {
        // get all user data
        $users = User::all();
        // dd($users);
        return view('account_maintenance', ['users' => $users]);
    }

    public function delete($id){
        User::where('id', $id)->delete();

        return back();
    }

    public function change_role($id)
    {
        // get all user data

        $users = Role::where('id', $id)->first();

        // dd($users);
        // change role
        // foreach ($users as $user) {
        //     if ($user->roles_id == 1) {
        //         $user->roles_id = 2;
        //         $user->save();
        //     }
        // }
        // return back();
        return view('update_role', ['users' => $users]);

    }
}
