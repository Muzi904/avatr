<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Common;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $employees =  User::where('type', 0)->pluck('name', 'id')->toArray();
        if ($request->ajax()) {
            $data = User::where('type', 0);
            if ($request->has('search.value')) {
                $searchValue = $request->input('search.value');
                $data = $data->where('name', 'LIKE', '%' . $searchValue . '%');
            }
            $data = $data->select('*', 'status as user_status')->orderBy('id', 'desc');
            return DataTables::of($data)
                ->addColumn('checkbox', '<input class="form-check-input m-0 align-middle" type="checkbox" aria - label = "Select invoice" >')
                ->addIndexColumn()
                ->addColumn('roles', function ($data) {
                    $roles = '';
                    if (!empty($data->getRoleNames())) {
                        foreach ($data->getRoleNames() as $v) {
                            if (!empty($roles)) {
                                $roles .=   ', ' . $v;
                            } else {
                                $roles .= $v;
                            }
                        }
                    }
                    return $roles;
                })
                ->addColumn('status', function ($data) {
                    if ($data->status == 'Y') {
                        return '<span class="btn btn-success">Active</span>';
                    } else {
                        return '<span class="btn btn-warning">Deactive</span>';
                    }
                })
                ->addColumn('created_at', function ($data) {
                    return Carbon::parse($data->created_at)->format('d-m-Y');
                })
                ->addColumn('action', null)
                ->rawColumns(['checkbox', 'status', 'action'])
                ->make(true);
        }

        return view('admin.pages.users.index', compact('employees'));
    }
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.pages.users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            // "last_name" => 'required',
            // "display_name" => 'required',
            // "user_name" => 'required',
            "mobile" => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm_password',
            'roles' => 'required',
            // "job_title" => 'nullable',

            // "office_phone" => "nullable",
            // "email_1" => "nullable|email",
            // "mobile_1" => "nullable",
            // "user_region" => "nullable",
            "profile_photo" => 'nullable'
        ]);

        $user = new User();
        if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $path = Common::uploadImage($image, 'images/profile');

            if ($path != false) {
                $user['profile_photo'] = $path;
            }
        }

        $user['name'] = $request->name;
        // $user['last_name'] = $request->last_name;
        // $user['display_name'] = $request->display_name;
        // $user['username'] = $request->user_name;
        $user['mobile'] = $request->mobile;
        $user['email'] = $request->email;
        // $user['jobtitle'] = $request->job_title;
        // $user['office_phone'] = $request->office_phone;
        // $user['email1'] = $request->email_1;
        // $user['mobile1'] = $request->mobile_1;
        // $user['user_region'] = $request->user_region;
        $user['status'] = $request->status;
        $user['sort_order'] = $request->sort_order;

        $user['password'] = Hash::make($request->password);
        $user->save();

        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.pages.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'id')->all();
        $userRole = $user->roles->pluck('id')->toArray();

        return view('admin.pages.users.edit', compact('user', 'roles', 'userRole'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            // "last_name" => 'required',
            // "display_name" => 'required',
            // "user_name" => 'required',
            "mobile" => 'required',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'password' => 'same:confirm_password',
            'roles' => 'required',
            // "job_title" => 'nullable',

            // "office_phone" => "nullable",
            // "email_1" => "nullable|email",
            // "mobile_1" => "nullable",
            // "user_region" => "nullable",
            "profile_photo" => 'nullable'
        ]);

        $user = User::find($request->id);
        if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $path = Common::uploadImage($image, 'images/profile');

            if ($path != false) {
                $user['profile_photo'] = $path;
            }
        }

        $user['name'] = $request->name;
        // $user['last_name'] = $request->last_name;
        // $user['display_name'] = $request->display_name;
        // $user['username'] = $request->user_name;
        $user['mobile'] = $request->mobile;
        $user['email'] = $request->email;
        // $user['jobtitle'] = $request->job_title;
        // $user['office_phone'] = $request->office_phone;
        // $user['email1'] = $request->email_1;
        // $user['mobile1'] = $request->mobile_1;
        // $user['user_region'] = $request->user_region;
        $user['status'] = $request->status;
        $user['sort_order'] = $request->sort_order;
        if ($request->password) {
            $user['password'] = Hash::make($request->password);
        }

        $user->save();
        DB::table('model_has_roles')->where('model_id', $request->id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')
            ->with('success', 'User updated successfully');
    }
    // public function destroy($id)
    // {
    //     User::find($id)->delete();
    //     return redirect()->route('admin.users.index')
    //         ->with('success', 'User deleted successfully');
    // }

    public function deactivate($id)
    {
        User::find($id)->update(['status' => 'N']);
        return redirect()->route('admin.users.index')
            ->with('success', 'User account deactivated');
    }
    public function activate($id)
    {
        User::find($id)->update(['status' => 'Y']);
        return redirect()->route('admin.users.index')
            ->with('success', 'User account activated');
    }

    public function reassign(Request $request)
    {
        // if ($request->records == 'all') {
        $addedEnquiries = Enquiry::where('added_by', $request->assign_from)->get();

        foreach ($addedEnquiries as $enquiry) {
            $enquiry->added_by = $request->assign_to;
            $enquiry->save();
        }

        $assignedEnquiries = Enquiry::where('assigned_to', $request->assign_from)->get();
        foreach ($assignedEnquiries as $enquiry) {
            $enquiry->assigned_to = $request->assign_to;
            $enquiry->assigned_date = Carbon::now()->format('Y-m-d H:i:s');
            $enquiry->save();
        }

        $notifications = Notification::where('user_id', $request->assign_from)->update(['user_id' => $request->assign_to]);

        // }

        return back()->with('success', 'Successfully Re-assigned.');
    }
}
