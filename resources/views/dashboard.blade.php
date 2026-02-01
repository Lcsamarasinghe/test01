<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MyBank</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('{{ asset('images/bg-bank.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .dashboard-card {
            max-width: 500px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .dashboard-card h2 {
            color: #0b3d91;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .btn-logout {
            padding: 12px 25px;
            background: linear-gradient(90deg, #0b3d91, #062d6b);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .btn-logout:hover {
            background: linear-gradient(90deg, #062d6b, #0b3d91);
        }

        .logo {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px;
        }
    </style>
</head>
<body>

<div class="dashboard-card">

    <!-- Bank Logo -->
    <img src="{{ asset('images/bank-logo.png') }}" alt="Bank Logo" class="logo">

    <h2>Welcome, {{ auth()->check() ? auth()->user()->username : 'Guest' }} 🎉</h2>

    @if(auth()->check())
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn-logout">Logout</button>
    </form>
    @else
    <a href="{{ route('loginForm') }}" class="btn btn-primary w-100 mt-3">Login</a>
    @endif
</div>

</body>
</html>
