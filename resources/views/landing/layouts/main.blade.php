<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="{{ asset('img/graduation-cap-solid.svg') }}" type="image/png">
    <title>{{ config('app.name') }} | {{ $title }}</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('css/CampusPulse.css') }}">
    <script src="{{ asset('js/notification.js') }}"></script>
</head>

<body>
    @include('landing.layouts.navbar')

    @yield('container')

    @include('landing.layouts.footer')

    <div class="alert alert-success" role="alert" id="notification"
        class="alert alert-success alert-dismissible fade show"
        style="display: none; position: absolute; top: 80px; right: 20px; z-index: 9999; min-height: 150px">
        <h4 class="alert-heading font-weight-bold" style="font-size: 30px;">Don't miss out!</h4>
        <p style="font-size: 15px;">Let's Sign up and get your notifications</p>
    </div>
    <!-- swiper cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js link -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.getElementById("btnNotif").addEventListener("click", function() {

            const notification = document.getElementById("notification");
            notification.style.display = notification.style.display === "none" ? "block" : "none";
        });
    </script>
</body>

</html>
