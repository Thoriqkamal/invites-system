<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $array = [];
        $user = DB::select('SELECT * FROM CMS_USERS LEFT JOIN
        (SELECT CMS_USERS_ROLES_GROUP.id AS id_users_roles_group, CMS_USERS_ROLES_GROUP.user_id, CMS_USERS_ROLES_GROUP.role_id FROM CMS_USERS_ROLES_GROUP) U ON CMS_USERS.id = U.user_id
        LEFT JOIN (SELECT CMS_USERS_ROLES.id AS id_users_roles,CMS_USERS_ROLES.name AS role FROM CMS_USERS_ROLES) R ON U.role_id = R.id_users_roles ORDER BY created_at DESC');
        // dd($user);
        foreach ($user as $key => $value) {
            // dd($value);
            $array[$value->username]['username'] = $value->username;
            $array[$value->username]['id'] = $value->id;
            $array[$value->username]['username'] = $value->username;
            $array[$value->username]['position'] = $value->position;
            $array[$value->username]['email'] = $value->email;
            $array[$value->username]['phone'] = $value->phone;
            $array[$value->username]['role'][] = $value->role;
            
            $role = DB::table('CMS_USERS_ROLES')->get();
            $userRoles = DB::table('CMS_USERS_ROLES_GROUP')
            ->select('CMS_USERS_ROLES_GROUP.id as id_users_roles_group','CMS_USERS_ROLES_GROUP.user_id','CMS_USERS_ROLES_GROUP.role_id','CMS_USERS_ROLES.id as id_users_roles','CMS_USERS_ROLES.name')
            ->leftjoin('CMS_USERS_ROLES', 'CMS_USERS_ROLES_GROUP.role_id', '=', 'CMS_USERS_ROLES.id')
            ->where('CMS_USERS_ROLES_GROUP.user_id', '=', $value->id)
            ->get();
        }
        // dd($array);
        // dd($userRoles);
        return view('users.view_user', compact('array','user','role','userRoles'));
    }

    public function submitUser(Request $request)
    {
        // dd($request->all());
        $user = $request->session()->get('username');
        $roles = $request['roles'];

        $random = $request->password;
        $random = Str::random(32);
        // dd($random);
        $data = DB::table('CMS_USERS')->insert([
            'username'     => $request->username,
            'password'     => Hash::make($request->password),
            "created_at"   => date('Y-m-d')
            ]);
                
        return redirect('/users')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function getUsers(Request $request)
    {
        $get_user = DB::table('CMS_USERS')
        ->select('CMS_USERS.id','CMS_USERS.username','CMS_USERS.password','CMS_USERS.position','CMS_USERS.email','CMS_USERS.phone','CMS_USERS_ROLES_GROUP.id as id_users_roles_group','CMS_USERS_ROLES_GROUP.user_id','CMS_USERS_ROLES_GROUP.role_id','CMS_USERS_ROLES.name as role')
        ->leftjoin('CMS_USERS_ROLES_GROUP', 'CMS_USERS.id', '=', 'CMS_USERS_ROLES_GROUP.user_id')
        ->leftjoin('CMS_USERS_ROLES', 'CMS_USERS_ROLES_GROUP.role_id', '=', 'CMS_USERS_ROLES.id')
        ->where('CMS_USERS.ID', '=', $request->id)
        ->get();

        $arr = [];
        foreach ($get_user as $key => $value) {
            $arr['id'] = $value->id;
            $arr['user_id'] = $value->user_id;
            $arr['username'] = $value->username;
            $arr['password'] = $value->password;
            $arr['position'] = $value->position;
            $arr['email'] = $value->email;
            $arr['phone'] = $value->phone;
            $arr['role_id'][] = $value->role_id;
        }
        
        $data = array("user" => $arr);
        // dd($data);
        echo json_encode($data);
		die();
    }

    public function getRoles()
    {
        $role = DB::table('CMS_USERS_ROLES')->get();
        
        $data = array("roles" => $role);
        // dd($data);
        echo json_encode($data);
		die();
    }

    public function updateUsers(Request $request)
    {
        // dd($request->all());
        $user = $request->session()->get('username');
        $data = DB::table('CMS_USERS')
        ->where('CMS_USERS.ID', $request->id2)
        ->update([
            'username'     => $request->username2,
            'password'     => $request->password2,
            'email'        => $request->email2,
            'position'     => $request->position2,
            'phone'        => $request->phone2,
            'updated_at'   => date('Y-m-d')
            ]);

        $role_id = array();
        if (!empty($request->roles2)) {
        foreach ($request->roles2 as $key => $req_role) {
                $role_id[] = $req_role;
            }
        }
        // dd($role_id);
        $userRoles = DB::table('CMS_USERS_ROLES_GROUP')
        ->where('USER_ID', $request->id2)
        ->delete();

        foreach ($role_id as $key_role => $value_role) {
            DB::table('CMS_USERS_ROLES_GROUP')->insert([
                'user_id'   => $request->id2,
                'role_id'   => $value_role
                ]);
        }
        
        DB::table('CMS_AUDIT_TRAIL')->insert([
			"USERNAME" 		=>  $user,
			"MENU" 			=> 'Manage User',
			"ACTIVITY" 		=> 'Update User',
			"DESKRIPSI" 	=>  json_encode($request->id2.' : '.$request->username2),
			"CREATED_AT" 	=>  date('Y-m-d')
		]);
        return redirect('/users')->with('status', 'Data Berhasil Diubah');
    }

    public function deleteUsers(Request $request)
    {
        // dd($request->all());
        $user = $request->session()->get('username');
        $users = DB::table('CMS_USERS')
        ->select('*')
        ->where('ID', '=', $request->id)
        ->get();

        $data = DB::table('CMS_USERS')
        ->where('CMS_USERS.ID', $request->id)
        ->delete();

        $userRoles = DB::table('CMS_USERS_ROLES_GROUP')
        ->where('USER_ID', $users[0]->id)
        ->delete();

        DB::table('CMS_AUDIT_TRAIL')->insert([
			"USERNAME" 		=>  $user,
			"MENU" 			=> 'Manage User',
			"ACTIVITY" 		=> 'Delete User',
			"DESKRIPSI" 	=>  json_encode($users[0]->id.' : '.$users[0]->username),
			"CREATED_AT" 	=>  date('Y-m-d')
		]);

        echo json_encode(array('status' => 1));
		exit();
    }
}
