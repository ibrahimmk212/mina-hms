<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;

class RoleController extends Controller
{
    public function list()
    {
        $data['roles'] = RoleModel::getRole();
        return view('admin.role.list', $data);
    }

    public function add()
    {
        return view('admin.role.add');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $save = new RoleModel();
        $save->name = $request->name;
        $save->save();
        return redirect(url('admin/role'))->with('success', 'Role created successfully');

    }

    public function edit($id)
    {
        $data['role'] = RoleModel::find($id);
        return view('admin.role.edit', data: $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $update = RoleModel::find($id);
        $update->name = $request->name;
        $update->save();
        return redirect(url('admin/role'))->with('success', 'Role updated successfully');
    }

    public function delete($id)
    {
        $delete = RoleModel::find($id);
        $delete->delete();
        return redirect(url('admin/role'))->with('success', 'Role deleted successfully');
    }
}
