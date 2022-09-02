@extends('layouts.master') @section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
            
<div class="card">
    <div class="card-header">
        Create Service
    </div>

    <div class="card-body">
        <form action="{{ route("admin.service.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Service Name*</label>
                <input type="text" id="name" name="service_name" class="form-control" value="" required>
                @if($errors->has('service_name'))
                    <p class="help-block">
                        {{ $errors->first('service_name') }}
                    </p>
                @endif
            
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} mt-3">
                <label for="name">Service Description</label>
                <textarea type="text" id="name" name="description" class="form-control" value="" required></textarea>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
            
            </div>
            <div class="mt-3">
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div> 
@endsection
