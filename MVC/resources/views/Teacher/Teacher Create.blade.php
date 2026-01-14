{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <button class="bg-purple-600 text-white mb-[500px] px-4 py-2 rounded-lg hover:bg-purple-700 transition">
        <a href="{{ url('/') }}">Back</a>
    </button>
    <form class="bg-white p-6 rounded-xl shadow-xl w-full max-w-md space-y-4" action="{{ route('store') }}" method="post">
        
        @csrf

        <h2 class="text-2xl font-semibold text-gray-700 text-center mb-4">
            Student Registration
        </h2>

        <div class="flex flex-col">
            <label class="text-gray-600 font-medium">Name</label>
            <input type="text" class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" name="name" value="{{ old('name') }}">
            @error("name")
                <span class=" text-red-500 ">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="text-gray-600 font-medium">Age</label>
            <input type="number" min="1" class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" name="age" value="{{ old('age') }}">
            @error("age")
                <span class=" text-red-500 ">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="text-gray-600 font-medium">Gender</label>
            <input type="text" class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" name="gender" value="{{ old('gender') }}">
            @error("gender")
                <span class=" text-red-500 ">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="text-gray-600 font-medium">Major</label>
            <input type="text" class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" name="major" value="{{ old('major') }}">
            @error("major")
                <span class=" text-red-500 ">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="text-gray-600 font-medium">Email</label>
            <input type="email" class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" name="email" value="{{ old('email') }}">
            @error("email")
                <span class=" text-red-500 ">{{ $message }}</span>
            @enderror
        </div>

        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Submit
        </button>
    </form>
    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 5.652a1 1 0 1 0-1.414-1.414L10 7.586 7.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 1 0 1.414 1.414L10 12.414l2.934 2.934a1 1 0 0 0 1.414-1.414L11.414 10l2.934-2.934z"/>
                </svg>
            </button>
        </div>
    @endif

</body>
</html> --}}
