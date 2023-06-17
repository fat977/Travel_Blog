@extends('dashboard.layouts.layout')

@section('content')
    <!-- Breadcrumb -->
    <ol class="breadcrumb" style="margin-top: 5%; padding-right: 16%">
        <li class="breadcrumb-item">{{ __('words.dashboard') }}</li>
        <li class="breadcrumb-item"><a href="#">{{ __('words.posts') }}</a>
        </li>
    </ol>


    <div class="container-fluid" style="margin-right: 15%;">

        <div class="animated fadeIn" style="margin-bottom: 10%">
            <form action="{{ Route('post.update' , $post) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('words.edit_post') }}</strong>
                        </div>
                        <div class="card-block">




                            <div class="form-group col-md-12">
                               <img src="{{asset('images/'.$post->image)}}" alt="" style="height: 200px" width="400px">
                            </div>


                            <div class="form-group col-md-12">
                                <label>{{ __('words.image') }}</label>
                                <input type="file" name="image" class="form-control"
                                    placeholder="{{ __('words.image') }}">
                            </div>



                            <div class="form-group col-md-12">
                                <label>{{ __('words.country_name') }}</label>
                                <select name="destination_id" id="" class="form-control" required>
                                    @foreach ($destinations as $destination)
                                        <option  @selected($post->destination_id == $destination->id) value="{{ $destination->id }}">{{ $destination->title }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>





                        <div class="card">
                            <div class="card-header">
                                <strong>{{ __('words.translations') }}</strong>
                            </div>
                            <div class="card-block">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    @foreach (config('app.languages') as $key => $lang)
                                        <li class="nav-item">
                                            <a class="nav-link @if ($loop->index == 0) active @endif"
                                                id="home-tab" data-toggle="tab" href="#{{ $key }}" role="tab"
                                                aria-controls="home" aria-selected="true">{{ $lang }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    @foreach (config('app.languages') as $key => $lang)
                                        <div class="tab-pane mt-3 fade @if ($loop->index == 0) show active in @endif"
                                            id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                            <br>
                                            <div class="form-group mt-3 col-md-12">
                                                <label>{{ __('words.title') }} - {{ $lang }}</label>
                                                <input type="text" name="{{ $key }}[title]" class="form-control"
                                                    placeholder="{{ __('words.title') }}" value="{{$post->translate($key)->title}}">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>{{ __('words.meta') }}</label>
                                                <textarea name="{{ $key }}[meta]" class="form-control" id="editor" cols="50" rows="10">{{$post->translate($key)->meta}}</textarea>
                                            </div>


                                            <div class="form-group col-md-12">
                                                <label>{{ __('words.content') }}</label>
                                                <textarea name="{{ $key }}[content]" class="form-control" id="editor" cols="50" rows="10">{{$post->translate($key)->content}}</textarea>
                                            </div>
                                            

                                            <div class="form-group col-md-12">
                                                <label>{{ __('words.tags') }}</label>
                                                <textarea name="{{ $key }}[tags]" class="form-control" id="" >{{$post->translate($key)->tags}}</textarea>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                {{__('words.submit')}}</button>

                        </div>



                    </div>
            </form>
        </div>
    </div>
@endsection
