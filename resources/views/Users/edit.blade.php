@extends('layouts.master')
@section('title','UsersTable')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">update user role </p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">users</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">update users</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Users Role</h4>
                    </div>

                    <div class="card-body">

                        <div class="form-validation">
                            <form class="form-valide" action="{{route('user.update',['id'=>$user->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" disabled id="val-username" name="name" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" disabled id="val-email" name="email" value="{{$user->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Roles
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                @php

                                                @endphp
                                                <select class="form-control" id="val-skill" name="role">
                                                    <option value="">{{$user->role }}</option>

                                                    <option value="SuperAdmin">SuperAdmin</option>
                                                    <option value="salesperson">salesperson</option>

                                                    <option value="inventory">inventory</option>







                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" disabled class="form-control" value="{{Auth::user()->updated_at}}"  name="val-currency">
                                            </div>
                                        </div>
                                <button type="submit" class="btn mr-2 btn-primary">Submit</button>
                                <button type="submit" class="btn btn-light">cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

