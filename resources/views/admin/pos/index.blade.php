@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Point of Sale</li>
        </ol>
        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button> <i class="fa fa-info mx-2"></i>
                <strong>{!! session('message') !!}</strong>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="badge badge-primary p-2 mx-auto">Add New Sale</a>
                    </li>
                </ul>
            </div>
        </div>
@endsection
