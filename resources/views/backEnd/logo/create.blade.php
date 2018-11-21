@extends('layouts.master')

@section('title', 'Dashboard')

@section('head_style')
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Slider Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">
                
            </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-8 mx-auto ">
                <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Slider Create <span class="pull-right"><a href="{{route('slider.manage')}}" class="btn btn-primary">Manage</a></span> </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" action="{{ route('logo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">

                      <div class="form-group">
                          <label for="image">Upload Image</label>
                          <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" id="slider_name" name="image" value="{{ old('image') }}">

                          @if ($errors->has('image'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                          @endif
                      </div>

                      <div class="form-group">
                          <label>Logo Type</label>
                          <select class="form-control" name="type">
                              <option value="0">Select One</option>
                              <option value="1">Logo</option>
                              <option value="2">Our Clients</option>
                              <option value="3">Our Partner</option>
                          </select>
                          @if ($errors->has('slider_name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('type') }}</strong>
                          </span>
                          @endif
                      </div>     
                   <!-- checkbox -->
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="Active" value="1">
                                    <label class="form-check-label"  for="Active">Active</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="status" id="Deactivate" value="0">
                                    <label class="form-check-label"  for="Deactivate">Deactivate</label>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  <!-- checkbox -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection


