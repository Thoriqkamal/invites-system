<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EventInstanceController extends Controller
{
    public function index()
    {   
        $data = DB::table('event_instance')
        ->select('event_instance.id','instance_name','username','event_date')
        ->leftjoin('CMS_USERS', 'event_instance.id_users', '=', 'CMS_USERS.id')
        ->get();

        $username = DB::table('CMS_USERS')
        ->get();

        return view('event_instance.index', compact('data', 'username'));
    }

    public function SubmitEventInstance(Request $request)
    {
        DB::table('event_instance')->insert([
            'instance_name'     => $request->instance_name,
            'id_users'          => $request->user_name,
            'event_date'        => $request->event_date,
            'created_at'        => date('Y-m-d')
        ]);
                
        return redirect('/event-instance')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function getEvent(Request $request)
    {
        $get_event = DB::table('event_instance')
        ->select('event_instance.id','instance_name','username','event_date')
        ->leftjoin('CMS_USERS', 'event_instance.id_users', '=', 'CMS_USERS.id')
        ->where('event_instance.id', '=', $request->id)
        ->get();

        $arr = [];
        foreach ($get_event as $key => $value) {
            $arr['id'] = $value->id;
            $arr['instance_name'] = $value->instance_name;
            $arr['username'] = $value->username;
            $arr['event_date'] = $value->event_date;
        }
        
        $data = array("event" => $arr);
        echo json_encode($data);
		die();
    }

    public function updateEvent(Request $request)
    {
        $id_users = DB::table('CMS_USERS')
        ->select('CMS_USERS.id')
        ->where('username', $request->username2)
        ->first();
        
        DB::table('event_instance')
        ->where('id', $request->id2)
        ->update([
            'instance_name'     => $request->instance_name2,
            'id_users'          => $id_users->id,
            'event_date'        => $request->event_date2,
            'updated_at'        => date('Y-m-d')
        ]);
    
        return redirect('/event-instance')->with('status', 'Data Berhasil Diubah');
    }

    Public function deleteEvent(Request $request)
    {
        $event = DB::table('event_instance')
        ->select('*')
        ->where('id', '=', $request->id)
        ->get();

        DB::table('event_instance')
        ->where('id', $request->id)
        ->delete();

        DB::table('CMS_USERS')
        ->where('id', $event[0]->id_users)
        ->delete();

        echo json_encode(array('status' => 1));
		exit();
    }
}
