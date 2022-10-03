<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(User $user)
    {
        $role = Role::all();
        view('admin.user.editrole', compact('user','role'));
        return view('admin.user.role',compact('user','role'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);
        return redirect()->back();
    }
    public function edit( Role $role, User $user)
    {
        $role;
        $showRoles = Role::all();
        view('admin.user.editrole', compact('user','role'));
        return view('admin.user.editrole', compact('user','role','showRoles'));
    }
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);
        return back();
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return back();
    }
    public function show(User $user)
    {
        $role = Role::all();
        
        return view('admin.user.role',compact('user','role'));
    }
    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }
}
