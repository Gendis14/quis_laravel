<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4B0082, #1D1E3C); /* Kombinasi warna ungu dan navy */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8); /* Transparan dengan efek blur */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(8px); /* Efek blur */
        }
        .login-container h1 {
            color: #4B0082; /* Warna ungu untuk judul */
            margin-bottom: 20px;
            text-align: center;
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
            text-align: center;
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
        <h1>Register</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="invalid-feedback" />
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback" />
            </div>

            <!-- Register Button -->
            <div class="d-grid gap-2">
                <x-primary-button class="btn btn-primary w-100">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

            <!-- Already Registered Link -->
            <p>Already registered? <a href="{{ route('login') }}" class="text-primary">Login now</a></p>
        </form>
    </div>

    <!-- Bootstrap JS (Optional but recommended for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 