<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class ReportEventInstanceController extends Controller
{
    public $instance_name, $search;
    public $paginate = 10;

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

        return view('report_event_instance.index',compact('event_instance','username','participant_list'));
    }

    public function upload_pdf()
    {
        if ($this->search != null) {
            $items = DB::table('event_instance')
            ->select('instance_name')
            ->where('instance_name','like','%'.$this->search.'%')
            ->groupBy('instance_name')
            ->first();
        }else {
            $items = DB::table('event_instance')
            ->select('instance_name')
            ->where('instance_name','like','%'.$this->search.'%')
            ->groupBy('instance_name')
            ->first();
        }
        dd($items);
        

    	$data_upload = DB::table('participant_list')
        ->select('participant_list.id','username','instance_name','status','active_time')
        ->leftjoin('CMS_USERS', 'participant_list.id_users', '=', 'CMS_USERS.id')
        ->leftjoin('event_instance', 'participant_list.id_event_instance', '=', 'event_instance.id')
        ->where('instance_name')
        // ->groupBy('instance_name')
        ->get();
        // dd($data_upload);
 
    	$pdf = PDF::loadview('report_event_instance.report_pdf',['data_upload'=>$data_upload]);
    	return $pdf->download('report-event-instance.pdf');
    }
}
