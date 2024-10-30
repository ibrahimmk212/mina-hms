<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        $data['users'] = User::all();
        return view('admin.user.list', $data);
    }

    public function add()
    {
        return view('admin.user.add');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required'
        ]);
        $create = new User();
        $create->name = $request->name;
        $create->email = $request->email;
        $create->role = $request->role;
        $create->password = bcrypt('123456'); // default password
        $create->save();
        return redirect(url('admin/user'))->with('success', 'User added successfully');

    }

    public function edit($id)
    {
        $data['user'] = User::find($id);
        return view('admin.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
        ]);
        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->role = $request->role;
        if ($request->password) {
            $update->password = bcrypt($request->password);
        }
        $update->save();
        return redirect(url('admin/user'))->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect(url('admin/user'))->with('warning', 'User deleted successfully');


    }
}
