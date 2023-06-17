@extends('Dashboard.layouts.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin" style="margin-top: 5%; padding-right: 16%">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">{{ __('words.settings') }}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" style="margin-right: 35%; margin-top:5%">
              <h4 class="card-title">{{ __('words.profile') }}</h4>

              @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error :</strong> {{Session::get('error')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif

              @if (Session::has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success :</strong> {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

              <form class="forms-sample"  method="POST"
              name="updateAdminPasswordForm" id="updateAdminPasswordForm" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label>{{ __('words.email') }}</label>
                  <input class="form-control" value="{{ $adminDetails['email']}}" readonly>
                </div>
               
                <div class="form-group">
                  <label for="name">{{ __('words.name') }}</label>
                  <input type="text" class="form-control" id="name" 
                  placeholder="{{ __('words.admin_name') }}" name="name" value="{{ $adminDetails['name']}}">
   
                    @error('name')
                      <small class="form-text text-danger">{{$message}} </small>
                   @enderror
                </div>

                <div class="form-group">
                  <label for="image">{{ __('words.image') }}</label>
                  <input type="file" class="form-control" id="image" name="image">
                  @if (!empty(Auth::guard('admin')->user()->image))
                      <img  style="width: 90px; height: 90px;" src="{{ url('images/'.$adminDetails['image']) }}">
                  @else
                      <img src="{{ asset('images/images/image.jpeg') }}" width="100px" class="img-avatar" alt="admin@bootstrapmaster.com">
                  @endif
                  @error('image')
                   <small class="form-text text-danger">{{$message}} </small>
                  @enderror
                </div>

                <a class="btn btn-primary" href="{{ route('update.password') }}">{{ __('words.update_password') }}</a>
               
                <button type="submit" class="btn btn-primary mr-2">{{ __('words.submit') }}</button>
                <button type="reset" class="btn btn-light">{{ __('words.cancel') }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
 
@endsection