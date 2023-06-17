<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travel Blog</title>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>

        var pusher = new Pusher('93d4293579fa293d0889', {
            encrypted: true
        });
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('93d4293579fa293d0889', {
        cluster: 'eu'
        });

        var channel = pusher.subscribe('new-post');
        channel.bind('post-event', function(data) {
        alert(JSON.stringify(data));
        });
    </script>

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
</head>

<body>
    <!-- Topbar Start -->
    @include('Website.layouts.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('Website.layouts.navbar')
    <!-- Navbar End -->

    <!-- content -->
    @yield('content')

   


    <!-- Footer Start -->
    @include('Website.layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.js" integrity="sha256-CfQXwuZDtzbBnpa5nhZmga8QAumxkrhOToWweU52T38=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('front/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ url('front/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('front/js/main.js') }}"></script>
    <script src="{{ url('front/js/register_login.js') }}"></script>

</body>

</html>