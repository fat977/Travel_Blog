@extends('Website.layouts.layout')
@section('content')
        <!-- Top News Slider Start -->
        <div class="container-fluid py-3">
            <div class="container">
                <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                    @foreach ($lastFivePosts as $post)
                        <div class="d-flex">
                            <img src="{{asset('images/'.$post->image)}}" style="width: 250px; height: 80px; object-fit: cover;">
                            <div class="d-flex align-items-center bg-light px-3" style="height: 80px; width:300px">
                                <a class="text-secondary font-weight-semi-bold" href="">{{$post->title}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Top News Slider End -->
    
    
        <!-- Main News Slider Start -->
        <div class="container-fluid py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                            @foreach ($posts as $post)
                            <div class="position-relative overflow-hidden" style="height: 435px;">
                                <img class="img-fluid h-100" src="{{asset('images/'.$post->image)}}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-1">
                                        <a class="text-white" href="">{{ $post->title }}</a>
                                        <span class="px-2 text-white">/</span>
                                        <a class="text-white" href="">{{$post->created_at->format('M d,Y')}}</a>
                                    </div>
                                    <a class="h2 m-0 text-white font-weight-bold" href="">{{$post->destination->title}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">{{ __('words.destinations') }}</h3>
                            {{-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> --}}
                        </div>
                        @foreach ($destinations as $destination)
                        <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                            <img class="img-fluid w-100 h-100" src="{{asset('images/'.$destination->image)}}" style="object-fit: cover;">
                            <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                                {{ $destination->title }}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News Slider End -->
    
    
        <!-- Featured News Slider Start -->
        <div class="container-fluid py-3">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Featured</h3>
                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                </div>
                <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="img/news-300x300-1.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="img/news-300x300-2.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="img/news-300x300-3.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="img/news-300x300-4.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="img/news-300x300-5.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                <a class="text-white" href="">Technology</a>
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" href="">January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Featured News Slider End -->
    
    
        <!-- Category News Slider Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @foreach ($destinations as $destination)
                    <div class="col-lg-6 py-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">{{ $destination->title }}</h3>
                        </div>
                        <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                            @foreach ($destination['children'] as $children)
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('images/'.$children->image)}}" style="object-fit: cover; height:150px">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">{{ $children->title }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$children->created_at->format('M d,Y')}}</span>
                                    </div>
                                    <a class="h4 m-0" href="{{Route('destination',$children->id)}}">{{ $children->content }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
        <!-- Category News Slider End -->
    

         <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        @foreach ($lastFivePosts as $post)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">
                                <img src="{{asset('images/'.$post->image)}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="{{route('post',$post->id)}}">{{$post->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->created_at->format('M d,Y')}}</span>
                                    </div>
                                    <a class="h6 m-0">{{$post->destination->title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/news-500x280-3.jpg" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/news-100x100-3.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/news-100x100-4.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100" src="img/ads-700x70.jpg" alt=""></a>
                    </div>
                </div>
                
                <!-- Sidebar -->
                @include('Website.layouts.sidebar')
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
@endsection