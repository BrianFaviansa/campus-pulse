<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS link -->
    <link rel="stylesheet" href="css/CampusPulse.css">

</head>

<body style="background-image: url('img/bgbiru.jpg')">
    <div class="container infinity-container">
        <div class="row">
            <div class="col-md-1 infinity-left-space"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
                <div class="text-center mb-4">
                    <h4>Login Form</h4>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </div>
                @endif

                <!--LOGIN FORM-->
                <form action="" method="POST">
                    @csrf
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Email"
                            class="form-control">
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="submit" type="submit" class="btn btn-block">Login</button>
                    </div>
                    <div class="text-right">
                        <a href="reset.php" class="forget-link">Forgot password?</a>
                    </div>
                    <div class="text-center mb-2">
                        <div class="text-center mt-3" style="color: #000;">or login with</div>

                        <!-- Facebook Button -->
                        <a href="#" class="btn btn-social btn-facebook"><i class="fab fa-facebook-f"></i></a>

                        <!-- Google Button -->
                        <a href="#" class="btn btn-social btn-google"><i class="fab fa-google"></i></a>

                        <!-- Twitter Button -->
                        <a href="#" class="btn btn-social btn-twitter"><i class="fab fa-twitter"></i></a>
                    </div>

                    <div class="text-center mb-5" style="color: #000;">Don't have an account?
                        <a class="register-link" href="{{ route('register') }}">Register here</a>
                    </div>
                </form>
            </div>
            <div class="col-md-1 infinity-right-space"></div>
        </div>
    </div>
</body>

</html>
