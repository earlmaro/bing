<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helpers\Traits\ApiResponseTrait;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponseTrait;

    public function create_user(Request $request)
    {
        $super_admin_role = [
            "can_read" => $request->super_admin_read,
                "can_write" => $request->super_admin_write,
                "can_delete"=> $request->super_admin_delete,
                "role_id" => 1
            ];
            $admin_role = [
                "can_read" => $request->admin_read,
                "can_write" => $request->admin_write,
                "can_delete" => $request->admin_delete,
                "role_id" => 2
            ];
            $employees_role = [
                "can_read" => $request->employee_read,
                "can_write" => $request->employee_write,
                "can_delete" => $request->employee_delete,
                "role_id" => 3
            ];
            $hr_role = [
                "can_read" => $request->hr_read,
                "can_write" => $request->hr_write,
                "can_delete" => $request->hr_delete,
                "role_id" => 4
            ];
            // dd($request);

        $v = Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'employee_id' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            // 'password' => 'required|confirmed|min:6',
        ]);

        if ($v->fails()) {
            return $this->respondError(new JsonResource([
                'message' => $v->errors(),
                'statusCode' => 422
            ]));
        }
        $data = [$admin_role, $super_admin_role, $employees_role, $hr_role];
// return $request;
        // foreach ($data as $item) {
        //     if ($item) {
        //             // return $item['role_id'];
        //             (new UserRole([
        //                 'user_id' => $user->id,
        //                 'role_id' => $item['role_id'],
        //                 'can_write' => $item['can_write'],
        //                 'can_read' => $item['can_read'],
        //                 'can_delete' => $item['can_delete'],
        //                 'status' => 'active'
        //             ]))->save();
        //     }
        // }

        $user = DB::transaction(function () use ($request) {
            $user = new User([
                'password' => Hash::make($request->password),
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'employee_id' => $request->employee_id,
                'phone' => $request->phone,
                'designation' => $request->designation,
                'status' => 'active',
                'email' => $request->email,
                'username' => $request->username,
            ]);

            $user->save();
            $data = [$request->admin_role,$request->super_admin_role,$request->employees_role,$request->hr_role];

            foreach ($data as $item) {
                if ($item) {
                    // return $item['role_id'];
                    (new UserRole([
                        'user_id' => $user->id,
                        'role_id' => $item['role_id'],
                        'can_write' => $item['can_write'],
                        'can_read' => $item['can_read'],
                        'can_delete' => $item['can_delete'],
                        'status' => 'active'
                    ]))->save();
                }
            }
            return $user;
        });

        $users = User::with(['user_roles'])->get();
        $roles = Role::all();
        return view(view: 'partials.entry')->with(compact('users'))->with(compact('roles'));
    }

    public function get_users()
    {
        $users = User::with(['user_roles'])->get();
        $roles = Role::all();
        // return $users;
        return view(view : 'partials.entry')->with(compact('users'))->with(compact('roles'));

    }



}
