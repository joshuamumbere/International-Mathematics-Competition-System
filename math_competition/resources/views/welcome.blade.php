<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Math Competition</title>
    <link href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
</head>
<body class="bg-gray-100">

    <!-- Navigation -->
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="text-xl font-semibold text-gray-800">Math Competition</a>
                <div class="flex items-center">
                    <a href="/login" class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">Login</a>
                    <a href="#" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">Get started</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-b from-blue-400 to-blue-600 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Welcome to Math Competition</h1>
            <p class="text-lg md:text-xl mb-8">Where numbers meet creativity!</p>
            <a href="/register" class="bg-white text-gray-800 hover:bg-gray-100 px-8 py-3 rounded-full font-semibold inline-block">Join Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-6 md:px-12">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">What We Offer</h2>
                <p class="text-lg text-gray-700">Engage in challenging math problems, compete with peers, and win prizes!</p>
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">Join the Community</h2>
                <p class="text-lg text-gray-700">Connect with fellow math enthusiasts, discuss strategies, and grow your skills.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p>&copy; 2024 Math Competition. All rights reserved.</p>
    </footer>

</body>
</html>
