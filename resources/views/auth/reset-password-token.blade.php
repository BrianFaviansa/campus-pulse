<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS link -->
    <link rel="stylesheet" href="css/CampusPulse.css">

</head>

<body style="background-image: url('img/bgbiru.jpg')">
    <div class="container infinity-container">
        <div class="row">
            <div class="col-md-1 infinity-left-space"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
                <div class="text-center mb-4">
                    <h4>Reset Password</h4>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </div>
                @endif

                <!--LOGIN FORM-->
                <form action="{{ route('validasi-forgot-password-act') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <label for="email">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Email"
                        class="form-control">
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <label for="password">New Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="submit" type="submit" class="btn btn-block btn-primary mt-2">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-1 infinity-right-space"></div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
