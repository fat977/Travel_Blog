@extends('Dashboard.auth.layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card-group" style="margin-top: 20%">
                    <div class="card p-a-2">
                        <div class="card-block">
                            <h1>{{ __('words.login') }}</h1>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                @if (Session::has('error_message'))
                                    <div class="alert alert-danger alert-dismissible  show" role="alert">
                                        <strong>Error :</strong><?php echo Session::get('error_message') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <p class="text-muted">{{ __('words.login_to_account') }}</p>
                                <div class="input-group m-b-1">
                                    <span class="input-group-addon"><i class="icon-user"></i>
                                    </span>
                                    <input type="text" name="email" class="form-control en" placeholder="{{ __('words.email') }}">
                                </div>
                                <div class="input-group m-b-2">
                                    <span class="input-group-addon"><i class="icon-lock"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control en" placeholder="{{ __('words.password') }}">
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <button type="submit" class="btn btn-primary p-x-2">
                                            <i class="icon-login"></i>
                                            {{ __('words.login') }}</button>
                                    </div>
                                    <div class="col-xs-6 text-xs-right">
                                        <button type="button" class="btn btn-link p-x-0">{{ __('words.forgot_password') }} </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary p-y-3" style="width:44%">
                        <div class="card-block text-xs-center">
                            <div>
                                <h2>ثبت نام</h2>
                                <p>اگر در سامانه عضو نیستید به راحتی می توانید همین الان نام نویسی کنید.</p>
                                <button type="button" class="btn btn-primary active m-t-1">عضویت رایگان</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
