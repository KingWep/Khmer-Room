<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register Form</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="card shadow-lg w-full max-w-md p-4 rounded-3">
        <h2 class="text-center text-2xl font-bold mb-4 text-gray-800">
            Register
        </h2>

        <form method="POST" action="{{ url('/store-register-form') }}">
            @csrf
            <!-- Name -->
            <div class="mb-3">
                <label class="form-label font-medium">Name</label>
                <input type="text" class="form-control rounded-lg" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                @error('name')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label font-medium">Email</label>
                <input type="email" class="form-control rounded-lg" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                @error('email')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label font-medium">Password</label>
                <input type="password" class="form-control rounded-lg" name="password" placeholder="Enter password" value="{{ old('password') }}">
                @error('password')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label font-medium">Confirm Password</label>
                <input type="password" class="form-control rounded-lg" name="password_confirmation" placeholder="Confirm password" value="{{ old("password_confirmation") }}">
                @error('password_confirmation')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-primary w-100 py-2 rounded-lg hover:opacity-90 transition">
                Register
            </button>

            <!-- Login Link -->
            <p class="text-center mt-3 text-sm text-gray-600">
                Already have an account?
                <a href="{{ url('show-login') }}" class="text-blue-600 font-semibold hover:underline">
                    Login
                </a>
            </p>
        </form>
    </div>

</body>

</html>