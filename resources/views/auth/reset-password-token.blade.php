<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS link -->
    <link rel="stylesheet" href="css/CampusPulse.css">

</head>

<body style="background-image: url('img/bgbiru.jpg')">
    <div class="container infinity-container">
        <div class="row">
            <div class="col-md-1 infinity-left-space"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
                <div class="text-center mb-4">
                    <h4>Reset Your Password</h4>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('validasi-forgot-password-act') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <label class="fs-5" for="password">New Password</label>
                        <input type="password" name="password" placeholder="Enter your new password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button name="submit" type="submit" class="btn btn-block">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-1 infinity-right-space"></div>
        </div>
    </div>
</body>

</html>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    </script>
@endif
