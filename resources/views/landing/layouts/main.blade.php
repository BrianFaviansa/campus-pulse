<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{{ config('app.name') }} | {{ $title }}</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
        style="display: none; position: absolute; top: 60px; right: 20px; z-index: 9999; min-height: 200px">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer
            so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
    <!-- swiper cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js link -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.getElementById("btnNotif").addEventListener("click", function() {
            console.log(btnNotif);
            const notification = document.getElementById("notification");
            notification.style.display = notification.style.display === "none" ? "block" : "none";
        });
    </script>
</body>

</html>
