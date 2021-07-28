@extends('layouts.master')

@section('content')

<style>
table td, table th {
    font-size: 13px;
    line-height: 22px;
}
</style>

<header class="page-header">
    <h2 id="tableTitle" class="panel-title">Report Event Instance List</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                </a>
            </li>
            <li><span>Report Event Instance List</span></li>
        </ol>

        <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<!-- start: page -->
<br>
<a href='/upload-pdf' class="btn btn-primary" target="_blank">Download PDF <i class="fa fa-file-pdf-o"></i></a>
<br>
<br>
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Report Event Instance List</h2>
            </header>
                <div class="panel-body">
                    <div class="form-row align-items-center">
                        <div class="col-md-auto">
                            {{-- <label>Event Instance: </label> --}}
                            <label>
                                <select name="" id="selectEvent" class="custom-select custom-select-sm form-control event_instance">
                                    <option value="all">Select Event</option>
                                    @foreach ($event_instance as $event)
                                    <option value="{{$event->instance_name}}" id="instanceName">{{$event->instance_name}}</option>    
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>
                    <br>
                    {{-- <br> --}}
                    <table class="display" id="reportEventInstance">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center">Username</th>
                                <th class="text-center">Event Instance</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Active Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participant_list as $key => $list)
                            <tr class="text-center">
                                <td>{{$list->username}}</td>
                                <td>{{$list->instance_name}}</td>
                                <td class="text-center">
                                    <?php
                                    $is_active = ($list->status == 1);
                                    $is_pending = ($list->status == 0);
    
                                    if ($is_active)
                                        $participant_status = 'Active';
                                    else if ($is_pending)
                                        $participant_status = 'Pending';
                                    else
                                        $participant_status = 'Unknown';
    
                                    echo $participant_status;
                                    ?>
                                </td>
                                @if ($list->active_time != null)
                                <td>{{$list->active_time}}</td>
                                @else
                                <td>Null</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </section>
<!-- end: page -->
@endsection