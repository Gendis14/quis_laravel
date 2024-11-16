<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4B0082, #1D1E3C, #FF1493); /* Kombinasi warna ungu, navy, dan pink */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8); /* Transparansi latar belakang */
            backdrop-filter: blur(10px); /* Efek blur pada latar belakang */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 1; /* Pastikan kontainer berada di atas latar belakang */
        }
        .login-container h1 {
            color: #4B0082; /* Warna ungu untuk judul */
            margin-bottom: 20px;
        }
        .login-container .btn {
            background-color: #4B0082; /* Warna ungu untuk tombol */
            color: white;
            border: none;
            transition: background-color 0.3s;
        }
        .login-container .btn:hover {
            background-color: #1D1E3C; /* Warna navy saat hover pada tombol */
        }
        .login-container .form-check-label {
            font-size: 0.875rem;
        }
        .login-container p {
            margin-top: 15px;
        }
        .login-container p a {
            color: #4B0082; /* Warna ungu untuk link */
        }
        .login-container p a:hover {
            color: #1D1E3C; /* Warna navy saat hover pada link */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1 class="text-center">Login</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Field -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
            </div>

            <!-- Remember Me Checkbox -->
            <div class="form-check mb-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
            </div>

            <!-- Forgot Password Link -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-muted">{{ __('Forgot your password?') }}</a>
                @endif
            </div>

            <!-- Login Button -->
            <div class="d-grid gap-2">
                <x-primary-button class="btn btn-primary w-100">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Register Link -->
        <p class="mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar sekarang</a></p>
    </div>

    <!-- Bootstrap JS (Optional but recommended for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
