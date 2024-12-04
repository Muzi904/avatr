<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.roles.index', compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('admin.pages.roles.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->input('name'), 'status' => $request->input('status')]);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role created successfully');
    }
    public function edit($id)
    {
        $role = Role::find($id);

        return view('admin.pages.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role updated successfully');
    }
    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('admin.roles.index')
            ->with('success', 'Role deleted successfully');
    }

    public function rolePermissions($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();

        $permissionBySection  = [];
        foreach ($permissions as $permission) {
            $section = $permission->section;
            if (!isset($permissionBySection[$section])) {
                // If not, create a new array for the section
                $permissionBySection[$section] = [];
            }
            $permissionBySection[$section][] = ['id' => $permission->id, 'name' => $permission->name, 'display_name' => $permission->display_name];
        }
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();

        $rolePermissionsBySection = [];

        foreach ($rolePermissions as $permission) {
            $section = $permission->section;
            $permissionId = $permission->id;
            // Check if the section exists in the array
            if (!isset($rolePermissionsBySection[$section])) {
                // If not, create a new array for the section
                $rolePermissionsBySection[$section] = [];
            }
            // Add the permission ID to the section's array
            $rolePermissionsBySection[$section][] = $permissionId;
        }

        return view('admin.pages.roles.permissions', compact('role', 'permissionBySection', 'rolePermissionsBySection'));
    }

    public function rolePermissionsUpdate(Request $request)
    {
        $role = Role::find($request->role_id);

        $permissionsID = array_map(
            function ($value) {
                return (int)$value;
            },
            $request->input('permission')
        );
        $role->syncPermissions($permissionsID);

        return redirect()->route('admin.roles.index')
            ->with('success', 'Permission updated successfully');
    }
}
