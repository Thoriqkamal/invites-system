<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ParticipantListController extends Controller
{
    public function index()
    {
        $event_instance = DB::table('event_instance')
        ->get();

        $username = DB::table('CMS_USERS')
        ->get();

        $participant_list = DB::table('participant_list')
        ->select('participant_list.id','username','instance_name','status','active_time')
        ->leftjoin('CMS_USERS', 'participant_list.id_users', '=', 'CMS_USERS.id')
        ->leftjoin('event_instance', 'participant_list.id_event_instance', '=', 'event_instance.id')
        ->get();

        return view('participant_list.index', compact('event_instance','username','participant_list'));
    }

    public function SubmitParticipantList(Request $request)
    {
        DB::table('participant_list')->insert([
            'id_users'          => $request->user_name,
            'id_event_instance' => $request->event_instance,
            'status'            => 0,
            'active_time'       => null,
            'created_at'        => date('Y-m-d')
        ]);
                
        return redirect('/all-participant-list')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function getParticipant(Request $request)
    {
        $get_participant = DB::table('participant_list')
        ->select('participant_list.id','username','instance_name','status','active_time')
        ->leftjoin('CMS_USERS', 'participant_list.id_users', '=', 'CMS_USERS.id')
        ->leftjoin('event_instance', 'participant_list.id_event_instance', '=', 'event_instance.id')
        ->where('participant_list.id', '=', $request->id)
        ->get();

        $arr = [];
        foreach ($get_participant as $key => $value) {
            $arr['id'] = $value->id;
            $arr['username'] = $value->username;
            $arr['instance_name'] = $value->instance_name;
            $arr['status'] = $value->status;
            $arr['active_time'] = $value->active_time;
        }
        
        $data = array("participant" => $arr);
        echo json_encode($data);
		die();
    }

    public function updateParticipant(Request $request)
    {
        $id_users = DB::table('CMS_USERS')
        ->select('CMS_USERS.id')
        ->where('username', $request->username2)
        ->first();

        $id_event_instance = DB::table('event_instance')
        ->select('event_instance.id')
        ->where('instance_name', $request->event_instance2)
        ->first();
        
        DB::table('participant_list')
        ->where('id', $request->id2)
        ->update([
            'id_users'          => $id_users->id,
            'id_event_instance' => $id_event_instance->id
        ]);
    
        return redirect('/all-participant-list')->with('status', 'Data Berhasil Diubah');
    }

    Public function deleteParticipant(Request $request)
    {
        DB::table('participant_list')
        ->where('id', $request->id)
        ->delete();

        echo json_encode(array('status' => 1));
		exit();
    }

    public function getAllParticipant($id, $event_instance)
    {
        $participant_list = DB::table('participant_list')
        ->select('participant_list.id', 'username', 'instance_name', 'status', 'active_time', 'CMS_USERS.id as id_usr', 'event_instance.id as id_event')
        ->leftjoin('CMS_USERS', 'participant_list.id_users', '=', 'CMS_USERS.id')
        ->leftjoin('event_instance', 'participant_list.id_event_instance', '=', 'event_instance.id')
        ->where('id_event_instance', '=', $id)
        ->where('instance_name', '=', $event_instance)
        ->get();

        return $participant_list;
    }

    public function getActiveParticipant($id, $event_instance)
    {
        $active_participant = DB::table('participant_list')
        ->select('participant_list.id', 'username', 'instance_name', 'status', 'active_time', 'CMS_USERS.id as id_usr', 'event_instance.id as id_event')
        ->leftjoin('CMS_USERS', 'participant_list.id_users', '=', 'CMS_USERS.id')
        ->leftjoin('event_instance', 'participant_list.id_event_instance', '=', 'event_instance.id')
        ->where('status', '=', 1)
        ->where('id_event_instance', '=', $id)
        ->where('instance_name', '=', $event_instance)
        ->get();

        return $active_participant;
    }

    public function getPendingParticipant()
    {
        $pending_participant = DB::select("SELECT id, username, instance_name, status, active_time FROM participant_list LEFT JOIN(SELECT id as id_usr, username FROM CMS_USERS) usr ON participant_list.id_users = usr.id_usr LEFT JOIN ( SELECT id as id_event, instance_name FROM event_instance) evnt ON participant_list.id_event_instance = evnt.id_event WHERE status = 0");

        return $pending_participant;
    }

    public function getSinglePendingParticipant($id, $event_instance)
    {
        $single_pending_participant = DB::table('participant_list')
        ->select('participant_list.id','username','instance_name','status','active_time')
        ->leftjoin('CMS_USERS', 'participant_list.id_users', '=', 'CMS_USERS.id')
        ->leftjoin('event_instance', 'participant_list.id_event_instance', '=', 'event_instance.id')
        ->where('participant_list.id_event_instance', '=', $id)
        ->where('instance_name', '=', $event_instance)
        ->where('status', '=', 0)
        ->get();

        return response()->json($single_pending_participant, 200);
    }

    public function updateActiveTime(Request $request)
    {   
        $update_activetime = DB::table('participant_list')
        ->where('id', $request->id)
        ->update([
            'status'          => $request->status,
            'active_time'     => $request->active_time
        ]);

        if ($update_activetime == null) {
            return response()->json('Data tidak ada yang diubah', 401);
        }
        $code = 200;
        $data['data'] = 'Data berhasil diubah';
        $data['code'] = $code;
        return response()->json($data);
    }
}