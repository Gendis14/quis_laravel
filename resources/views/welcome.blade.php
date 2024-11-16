<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #7A3D92, #2C3E50); /* Gradasi warna ungu dan navy */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Mengubah latar belakang menjadi lebih terang dengan transparansi */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .container h1 {
            font-size: 36px;
            color: #333333; /* Warna gelap untuk teks agar kontras dengan latar belakang terang */
            margin-bottom: 20px;
        }
        .container p {
            font-size: 18px;
            color: #7A3D92; /* Warna sedikit lebih terang agar lebih nyaman dibaca */
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            color: #FFFFFF; /* Mengubah warna teks menjadi putih */
            background-color: skyblue; /* Mengubah latar belakang tombol menjadi hijau terang */
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn:hover {
            background-color: #45a049; /* Warna hijau sedikit lebih gelap saat hover */
            transform: translateY(-3px); /* Efek tombol naik sedikit */
        }
        .auth-links {
            margin-top: 20px;
            font-size: 16px;
        }
        .auth-links a {
            color: #7A3D92;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .auth-links a:hover {
            color: #2C3E50; /* Warna navy saat hover pada link */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat Datang!</h1>
        <p>Anda telah berhasil masuk ke aplikasi Laravel. Pilih salah satu opsi di bawah ini untuk melanjutkan.</p>

        @if (Route::has('login'))
            <div class="auth-links">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</body>
</html>
