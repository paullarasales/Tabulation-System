<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabulation Login</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700" rel="stylesheet" />
    <style>
        body { 
            font-family: 'Poppins', sans-serif;
            height: 100vh; 
        }
        .min-h-screen { min-height: 100vh; }
        .text-lg { font-size: 1.125rem; }
        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            width: 100%;
            padding: 20px; 
        }
        
        .nav-link {
            margin-bottom: 10px;
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }
        .nav-link:hover {
            color: #555; /* Set your desired hover text color */
        }
        @media (max-width: 768px) {
            .container {
                width: 100%;
            }
        }
        .selection\:bg-red-500 *::selection { background-color: rgba(239, 68, 68, 1); }
        .selection\:text-white *::selection { color: #fff; }
    </style>
</head>
<body class="font-poppins antialiased text-lg">
    <div class="container bg-dots-darker bg-center dark:bg-dots-lighter  selection:bg-red-500 selection:text-white">

        <p class="logo text-white font-semibold text-xl">Your Logo</p>
        <a href="#" class="nav-link">Home</a>
        <a href="#" class="nav-link">About</a>
        <a href="#" class="nav-link">Services</a>
        <a href="#" class="nav-link">Contact</a>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        @endif
    </div>
</body>
</html>
