<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- LightBox css -->
    <link rel="stylesheet" type="text/css" href="/vendor/lightbox2-2.11.4/dist/css/lightbox.min.css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="/img/logo.png" width="80px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs- target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria- label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if(Session::has('customerlogin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/cust/booking')}}">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/cust/custbooking')}}">Your Booking</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/logout')}}">Logout</a></li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{url('/register')}}">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    @yield('scripts');
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>