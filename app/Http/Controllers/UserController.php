<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Helpers\Traits\ApiResponseTrait;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponseTrait;

    public function create_user(Request $request)
    {
        $v = Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'role_id' => 'required',
            'employee_id' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($v->fails()) {
            return $this->respondError(new JsonResource([
                'message' => $v->errors(),
                'statusCode' => 422
            ]));
        }

        $user = DB::transaction(function () use ($request) {
            $user = new User([
                'password' => Hash::make($request->password),
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'role_id' => $request->role_id,
                'employee_id' => $request->employee_id,
                'phone' => $request->phone,
                'designation' => $request->designation,
                'status' => 'active',
                'email' => $request->email,
                'username' => $request->username,
            ]);

            $user->save();

            // $vendor = new UserRole([
            //     'user_id' => $user->id,
            //     'can_read' => $request->lga_area,
            //     'can_write' => $request->bank_id,
            //     'can_delete' => $request->business_name,
            //     'role_id' => $request->imssin,
            // ]);

            // $vendor->save();


            // foreach ($request->route as $item) {
            //     (new VendorRoute([
            //         'user_id' => $user->id,
            //         'route_id' => $item,
            //         'status' => 'active'
            //     ]))->save();
            // }


            return $user;
        });

        $user->refresh();

        return $this->respondWithResource(new JsonResource([
            'user' => $user
        ]));
    }

    public function get_users()
    {
        return view(view: 'layout.app');

    }



}
