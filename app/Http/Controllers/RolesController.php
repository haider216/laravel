<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function roles_dashboard(){
        $roles = Role::all();
        return view('admin.roles.roles_dashboard', compact('roles'));
    }
}
