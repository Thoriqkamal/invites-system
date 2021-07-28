@extends('layouts.master')

@section('content')

    <header class="page-header">
        <h2 id="tableTitle" class="panel-title">Manage Event Instance</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fa fa-list"></i>
                    </a>
                </li>
                <li><span>Manage Event Instance</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="page-title-actions">
        <div class="d-inline-block dropdown" style="float: right">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add-wlist">
                <span class="icon text-white-50">
                    <i class="fas fa-pen"></i>
                </span>
                <span class="text input-user">Add New</span>
            </a>
        </div>
        <div class="clear" style="clear: both"></div>
    </div>
    <br>
    <!-- start: page -->
    @if (\Session::has('status'))
    <div class="alert alert-success">
        {{ \Session::get('status') }}
    </div>
    @endif
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Manage Event Instance</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="display whitelistTable" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center">Instance Name</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Event Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $event)
                            <?php //dd($event->id);?>
                                <tr class="text-center">
                                    <td>{{$event->instance_name}}</td>
                                    <td>{{$event->username}}</td>
                                    <td>{{$event->event_date}}</td>
                                    <td>
                                    <a class="btn-ext-small btn btn-sm btn-info editEvent" id="editEvent" data-id="{{$event->id}}" data-toggle="modal" data-target=".edit_event"><i style="color:#fff" class="fa fa-edit"></i></a>

                                    <a class="btn-ext-small btn btn-sm btn-danger deleteEvent" data-id="{{$event->id}}"><i style="color:#fff" class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- end: page -->

<!-- Modal Add Event Instance -->
<div class="modal fade" id="add-wlist">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Event Instance</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('submit-event-instance')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="instance_name">Instance Name<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="InstanceName" name="instance_name" placeholder="Input Instance Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Username</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select id="UserName" name="user_name" class="custom-select custom-select-sm form-control" required>
                                    <option value="Select_name">Select Name</option>
                                    @foreach ($username as $name)
                                    <?php //dd($name);?>
                                    <option value="{{$name->id}}" id="AutomaticOption">{{$name->username}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="event_date">Event Date<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="EventDate" name="event_date" placeholder="Input Username" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Event Instance -->
<div class="modal fade edit_event" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change Event Instance</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('event-update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="id2" name="id2">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="instance_name">Instance Name<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="instancename2" name="instance_name2" placeholder="Input Instance Name" required>
                        </div>
                    </div>

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
                            <label for="event_date">Event Date<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="eventdate2" name="event_date2" placeholder="Input Username" required>
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