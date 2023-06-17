@extends('Dashboard.layouts.layout')
@section('content')
<div class="madin-panel">
    <div class="content-wradpper">
      <div class="row">
        <div class="col-md-12 grid-margin" style="margin-top: 5%; padding-right: 16%">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">{{ __('words.settings') }}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="container-flui">
        <div class="">
          <div class="card">
            <div class="card-body" style="margin-right: 15%; margin-top:5%">
              <h4 class="card-title">{{ __('words.update_password') }} </h4>

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
              name="updateAdminPasswordForm" id="updateAdminPasswordForm">
              @csrf
                <div class="form-group">
                  <label>{{ __('words.email') }}</label>
                  <input class="form-control" value="{{ $adminDetails['email']}}" readonly>
                </div>

                <div class="form-group">
                  <label for="current_password">{{ __('words.current_password') }}</label>
                  <input type="password" class="form-control" id="current_password" 
                  placeholder="{{ __('words.current_password') }}" name="current_password" required>
                  <span id="check_password"></span>
              </div>

                <div class="form-group">
                    <label for="new_password">{{ __('words.new_password') }}</label>
                    <input type="password" class="form-control" id="new_password"
                     placeholder="{{ __('words.new_password') }}" name="new_password" required>
                  </div>
                <div class="form-group">
                  <label for="confirm_password">{{ __('words.confirm_password') }}</label>
                  <input type="password" class="form-control" id="confirm_password" placeholder="{{ __('words.confirm_password') }}"
                  name="confirm_password" required>
                </div>
               
                <button type="submit" class="btn btn-primary mr-2">{{ __('words.submit') }}</button>
                <button  type="reset" class="btn btn-light">{{ __('words.cancel') }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- content-wrapper ends -->
 
@endsection