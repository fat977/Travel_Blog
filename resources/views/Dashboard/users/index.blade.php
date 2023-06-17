@extends('dashboard.layouts.layout')

@section('content')
    <!-- Breadcrumb -->
    <ol class="breadcrumb" style="margin-top: 5%; padding-right: 16%">
        <li class="breadcrumb-item">{{ __('words.dashboard') }}</li>
        <li class="breadcrumb-item"><a href="#">{{ __('words.users') }}</a>
        </li>
    </ol>


    <div class="container-fluid" style="margin-right:15% ">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> {{ __('words.striped_table') }}
                </div>
                <div class="card-block">
                    <table class="table table-striped" id="users">
                        <thead>
                            <tr>
                                <th>{{ __('words.name') }}</th>
                                <th>{{ __('words.email') }}</th>
                                <th>{{ __('words.created_at') }}</th>
                                <th>{{ __('words.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user['email']}} </td>
                                    <td> {{ $user->created_at->format('Y-m-d') }} </td>
                                    <td>
                                        
                                        <form action="{{ route('user.destroy',$user['id']) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                              
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('words.confirm_delete') }}')"><i style="font-size: 20px;" class="fa fa-trash"></i></button>
                                        </form>
    
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

