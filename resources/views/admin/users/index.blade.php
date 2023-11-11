@extends('layouts.admin')

@section('title')
    Admin Dashboard - Users
@endsection
@section('pagepath')
    <a href="{{ route('users.index') }}"> Users </a>
@endsection

@section('content')
<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Users</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        @if (session('message'))
        <div class="alert alert-success alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('message') }}</strong>
        </div>
        @endif
        <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right">
                <a href="{{ route('users.create') }}" class="btn btn-dark btn-min-width mr-1 mb-1" >Add User</a>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-success white">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email}}</td>
                            <td>
                                @if($user->role_as == 1)
                                    <span class="badge badge-primary">Admin</span>
                                @else
                                    <span class="badge badge-warning">User</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete {{$user->name}}?' onclick="return confirm('Are you sure, you want to delete this data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
