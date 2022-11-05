<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function admin_dashboard(){
        $users = User::all();

        return view('admin.admin_dashboard', compact('users'));
    }

    public function deleteUser(Request $request, $id){
        $user1 = User::query()->findOrFail($id);
        $user1->delete();

        return redirect("admin_dashboard");
    }
}
