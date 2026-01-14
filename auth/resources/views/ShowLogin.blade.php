<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="card shadow-lg w-full max-w-md p-4 rounded-3">
        <h2 class="text-center text-2xl font-bold mb-4 text-gray-800">
            Login
        </h2>

        <form method="POST" action="{{ url('/store-login-form') }}">
            @csrf
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label font-medium">Email</label>
                <input type="email" class="form-control rounded-lg" name="email" placeholder="Enter your email">
                @error('email')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="form-label font-medium">Password</label>
                <input type="password" class="form-control rounded-lg" name="password" placeholder="Enter your password">
                 @error('password')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-primary w-100 py-2 rounded-lg hover:opacity-90 transition">
                Login
            </button>

            <!-- Extra links -->
            <div class="text-center mt-3 text-sm text-gray-600">
                <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
            </div>

            <p class="text-center mt-2 text-sm text-gray-600">
                Don’t have an account?
                <a href="{{ url('/show-register') }}" class="text-blue-600 font-semibold hover:underline">
                    Register
                </a>
            </p>
        </form>
    </div>

</body>

</html>