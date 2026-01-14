<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-500 h-screen flex items-center justify-center">
    <!-- Success Alert -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success! </strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <div class="container text-center p-10 bg-white/10 rounded-3xl shadow-lg backdrop-blur-md">
        <h1 class="text-white text-5xl mb-8 font-bold">Welcome To My Website</h1>
        <div class="flex justify-center gap-6">
            <!-- Bootstrap styled <a> -->
            <a href="{{ url('show-login') }}" class="btn btn-light px-6 py-3 text-lg">
                Login
            </a>
            <!-- Tailwind styled <a> -->
            <a href="{{ url('show-register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-lg font-semibold transition">
                Register
            </a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
