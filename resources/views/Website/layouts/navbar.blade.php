<div class="row align-items-center py-2 px-lg-5">
    <div class="col-lg-4">
        <a href="" class="navbar-brand d-none d-lg-block">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">{{ __('words.travel_blog') }}</span></h1>
        </a>
    </div>
    <div class="col-lg-8 text-center text-lg-right">
        <img class="img-fluid" src={{ url('front/img/ads-700x70.jpg') }} alt="">
    </div>
</div>
<div class="container-fluid p-0 mb-3">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">{{ __('words.travel') }}</span>{{ __('words.blog') }}</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{ route('website') }}" class="nav-item nav-link active">{{ __('words.home') }}</a>

                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('words.destinations') }}</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach ($destinations as $destination)
                            <div class="dropdown-item">{{ $destination->title }}</div>       
                            @foreach ($destination['children'] as $children)
                            <ul id="menu">
                                <li><a href="{{Route('destination',$children->id)}}">{{ $children['title'] }}</a></li>
                            </ul>
                            @endforeach
                        @endforeach  
                    </div>
                </div>
              


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('words.login') }}</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('blogger.register.login') }}" class="dropdown-item">{{ __('words.blogger') }}</a>
                        <a href="{{ route('user.register.login') }}" class="dropdown-item">{{ __('words.user') }}</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">{{ __('words.contact') }}</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-md-down">{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
    
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                              href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
    
                    </div>
                </li>
            </div>
            <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text text-secondary"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>