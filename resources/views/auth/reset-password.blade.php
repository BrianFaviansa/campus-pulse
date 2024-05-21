<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mt-5">Hi, CampusPulse User</h1>
                <p>Please click the button below to reset your password</p>
                <br>
                <a href="{{ route('forgot-password.validation', $token) }}" class="btn btn-primary">Reset Password</a>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
