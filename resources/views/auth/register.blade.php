<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                    <h4>Let’s Set Up Your Account!</h4>
                </div>
                <div class="mb-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <!--REGISTER FORM-->
                <form action="{{ route('register') }}" method="POST" class="px-3">
                    @csrf
                    <div class="form-input">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" value="{{ old('name') }}" name="name" placeholder="Full Name" class="form-control" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" value="{{ old('email') }}" name="email" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-info-circle"></i></span>
                        <input type="text" name="info" placeholder="Where did you know CampusPulse?" required>
                    </div>
                    <div class="mb-3">
                        <button name="submit" type="submit" class="btn btn-block">Register</button>
                    </div>
                    <div class="text-center mb-2">
                        <div class="text-center mb-3" style="color: #000;">or login with</div>

                        <!-- Facebook Button -->
                        <a href="#" class="btn btn-social btn-facebook"><i class="fab fa-facebook-f"></i></a>

                        <!-- Google Button -->
                        <a href="#" class="btn btn-social btn-google"><i class="fab fa-google"></i></a>

                        <!-- Twitter Button -->
                        <a href="#" class="btn btn-social btn-twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="text-center mb-5" style="color: #000;">Already have an account? <a class="login-link" href="{{ route('login') }}">Login here</a></div>
                </form>
            </div>
            <div class="col-md-1 infinity-right-space"></div>
        </div>
    </div>
</body>

</html>
