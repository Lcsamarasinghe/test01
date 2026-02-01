<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - MyBank</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/bg-bank.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            padding: 30px;
        }

        .card-title {
            color: #0b3d91;
            font-weight: bold;
        }

        .btn-success {
            background: linear-gradient(90deg, #0b3d91, #062d6b);
            border: none;
            color: white;
        }

        .btn-success:hover {
            background: linear-gradient(90deg, #062d6b, #0b3d91);
        }

        .logo {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px;
        }

        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">

                <!-- Bank Logo -->
                <img src="{{ asset('images/bank-logo.png') }}" alt="Bank Logo" class="logo">

                <h3 class="card-title text-center mb-4">Create Your Account</h3>

                <!-- Error messages -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}<br>
                        @endforeach
                    </div>
                @endif

                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>

                <p class="mt-3 text-center text-muted">
                    Already have an account? <a href="{{ route('loginForm') }}">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
