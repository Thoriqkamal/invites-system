@extends('layouts.master')

@section('content')

<style>
table td, table th {
    font-size: 13px;
    line-height: 22px;
}
</style>

<header class="page-header">
    <h2 id="tableTitle" class="panel-title">Manage User</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>
                </a>
            </li>
            <li><span>Manage User</span></li>
        </ol>

        <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<!-- start: page -->

<div class="page-title-actions">
    <div class="d-inline-block dropdown" style="float: right">
        <a href="#" class="btn btn-primary btn-icon-split btn-sm cetak mb-2" data-toggle="modal" data-target=".add-user">
            <span class="icon text-white-50">
                <i class="fas fa-pen"></i>
            </span>
            <span class="text input-user">Add New</span>
        </a>
    </div>
    <div class="clear" style="clear: both"></div>
</div>
<br>
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Manage User</h2>
            </header>
                <div class="panel-body">
                    <table class="display" id="userTable">
                        <thead>
                            <tr class="text-center">
                                <th class="text-center">Username</th>
                                {{-- <th class="text-center">Email</th>
                                <th class="text-center">Phone</th> --}}
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($array as $key => $users)
                            <?php //dd($key);
                            ?>
                            <tr class="text-center">
                                <td>{{$key}}</td>
                                {{-- <td>{{$users['email']}}</td>
                                <td>{{$users['phone']}}</td> --}}
                                <td>
                                    <a class="btn-ext-small btn btn-sm btn-info editUser" id="editUser" data-id="{{$users['id']}}" data-toggle="modal" data-target=".edit-user"><i style="color:#fff" class="fa fa-edit"></i></a>

                                    <a class="btn-ext-small btn btn-sm btn-danger deleteUser" data-id="{{$users['id']}}"><i style="color:#fff" class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </section>
<!-- end: page -->

<!-- Modal Add User -->
<div class="modal fade add-user" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('submit-users')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Username<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" name="username" placeholder="Input Username" name="username" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Password<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Input Password" required>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="email">Email<span style="color:red">*</span></label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Input Email" name="email" required>
                        @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" name="phone" id="inputPhone" placeholder="Input Phone">
                        @if ($errors->has('phone'))
                        <span class="error">{{ $errors->first('phone') }}</span>
                        @endif
                    </div> --}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary save-changes" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit User -->
<div class="modal fade edit-user" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('users-update')}}">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="id2" placeholder="Masukkan Nama" name="id2">
                    {{-- <input type="hidden" class="form-control" id="user_id2" placeholder="Masukkan Nama" name="user_id2"> --}}

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Username<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username2" placeholder="Masukkan Nama" name="username2" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Password<span style="color:red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" id="password2" placeholder="Input Password" name="password2" required>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="email">Email<span style="color:red">*</span></label>
                        <input type="email" class="form-control" id="email2" placeholder="Masukkan Email" name="email2" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone2" placeholder="Masukkan Phone" name="phone2">
                    </div> --}}

                    <div class="modal-footer">
                        <button id="user-add" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary save-edit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection