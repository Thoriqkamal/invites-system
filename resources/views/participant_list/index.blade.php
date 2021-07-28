@extends('layouts.master')

@section('content')

<style>
table td, table th {
    font-size: 13px;
    line-height: 22px;
}
</style>

<header class="page-header">
    <h2 id="tableTitle" class="panel-title">Manage All Participant List</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                </a>
            </li>
            <li><span>Manage All Participant List</span></li>
        </ol>

        <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<!-- start: page -->

<div class="page-title-actions">
    <div class="d-inline-block dropdown" style="float: right">
        <a href="#" class="btn btn-primary btn-icon-split btn-sm cetak mb-2" data-toggle="modal" data-target=".add-pariticipant">
            <span class="icon text-white-50">
                <i class="fas fa-pen"></i>
            </span>
            <span class="text input-user">Add New</span>
        </a>
    </div>
    <div class="clear" style="clear: both"></div>
</div>
<br>
@if (\Session::has('status'))
    <div class="alert alert-success">
        {{ \Session::get('status') }}
    </div>
@endif
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Manage All Participant List</h2>
            </header>
                <div class="panel-body">
                    <table class="display" id="participantTable">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center">Username</th>
                                <th class="text-center">Event Instance</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Active Time</th>
                                <th class="text-center">Action</th>
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
                                <td>
                                    <a class="btn-ext-small btn btn-sm btn-info EditParticipant" id="editUser" data-id="{{$list->id}}" data-toggle="modal" data-target=".edit-participant"><i style="color:#fff" class="fa fa-edit"></i></a>

                                    <a class="btn-ext-small btn btn-sm btn-danger deleteParticipant" data-id="{{$list->id}}"><i style="color:#fff" class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </section>
<!-- end: page -->

<!-- Modal Add Participant List -->
<div class="modal fade add-pariticipant" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Event Instance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('submit-participant-list')}}">
                    {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-3">
                        <label>Username</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="UserName" name="user_name" class="custom-select custom-select-sm form-control" required>
                                <option value="Select_name">Select Name</option>
                                @foreach ($username as $name)
                                <option value="{{$name->id}}" id="AutomaticOption">{{$name->username}}</option>    
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-3">
                        <label>Event Instance</label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="EventInstance" name="event_instance" class="custom-select custom-select-sm form-control" required>
                                <option value="Select_name">Select Event</option>
                                @foreach ($event_instance as $event)
                                <option value="{{$event->id}}" id="AutomaticOption">{{$event->instance_name}}</option>    
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary save-changes" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit Participant List -->
<div class="modal fade edit-participant" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change Participant List</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('participant-update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="id2" name="id2">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Username</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="username2" id="username2" class="custom-select custom-select-sm form-control">
                                    @foreach ($username as $name)
                                    <option value="{{$name->username}}" id="{{$name->id}}">{{$name->username}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Event Instance</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="event_instance2" id="event_instance2" class="custom-select custom-select-sm form-control">
                                    @foreach ($event_instance as $event)
                                    <option value="{{$event->instance_name}}" id="{{$event->id}}">{{$event->instance_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection