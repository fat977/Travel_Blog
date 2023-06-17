<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travel Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">

    <!-- signup / login -->
    <link href="{{ url('front/css/register_login.css') }}" rel="stylesheet">

     
</head>

<body>
    <!-- Navbar Start -->
    @include('Website.layouts.navbar')
    <!-- Navbar End -->

    @if (Session::has('success_message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Message :</strong> {{Session::get('success_message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
    <h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
       
        

        <form action="{{ route('blogger.register') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>

          <input type="text" name="name" placeholder="Name" required/>
          @error('name')
            <small class="form-text text-danger">{{$message}} </small>
          @enderror

          <input type="email" name="email" placeholder="Email" required/>
          @error('email')
            <small class="form-text text-danger">{{$message}} </small>
          @enderror

          <input type="password" name="password" placeholder="Password" required/>
          @error('password')
            <small class="form-text text-danger">{{$message}} </small>
          @enderror

          <input type="file" name="image" required/>
          @error('image')
            <small class="form-text text-danger">{{$message}} </small>
          @enderror

          <select name="country" class="text-field mt-2">
            <option value="">Select Country</option>
            @foreach ($countries as $country)
                <option value="{{ $country['country_name'] }}" >
                {{ $country['country_name'] }}</option>
            @endforeach
           </select>
            @error('country')
                <small class="form-text text-danger">{{$message}} </small>
            @enderror

          <button class="mt-3">Sign Up</button>
        </form>
      </div>

      <div class="form-container sign-in-container">

        @if (Session::has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error :</strong> {{Session::get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <form action="{{ route('blogger.login') }}" method="POST">
          @csrf
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" name="email" placeholder="Email" required />
          @error('email')
            <small class="form-text text-danger">{{$message}} </small>
          @enderror
          
          <input type="password" name="password" placeholder="Password" required />
          @error('password')
            <small class="form-text text-danger">{{$message}} </small>
          @enderror
          <a href="#">Forgot your password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('front/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ url('front/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('front/js/main.js') }}"></script>

     <!-- signup / login -->
     <script src="{{ url('front/js/register_login.js') }}"></script>
</body>

</html>