@extends('layouts.admin')

@section('title')
    Admin Dashboard - Create User
@endsection

@section('content')
@section('pagepath')
    <a href="{{ route('users.create') }}"> Create User </a>
@endsection
<div class="content-overlay"></div>
<div class="content-wrapper">

    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="bordered-layout-basic-form">Create User</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            @if (session('message'))
                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{{ session('message') }}</strong>
                            </div>
                            @endif
                            <div class="card-body">
                                <form class="form form-horizontal form-bordered" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> User Info</h4>
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="name">User Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="name" class="form-control" placeholder="User Name" name="name">
                                            </div>
                                            @error('name')
                                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="email">User Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="email" class="form-control" placeholder="User Email" name="email">
                                            </div>
                                            @error('email')
                                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="password">User Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="password" class="form-control" placeholder="User password" name="password">
                                            </div>
                                            @error('password')
                                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="Status">Admin?</label>
                                            <div class="col-md-9">
                                               <select name="role_as"  class="form-control">
                                                    <option value="">Select Role</option>
                                                    <option value="0">User</option>
                                                    <option value="1">Admin</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>
@endsection
