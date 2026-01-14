<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 p-6">
    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session(key: 'message') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 5.652a1 1 0 1 0-1.414-1.414L10 7.586 7.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 1 0 1.414 1.414L10 12.414l2.934 2.934a1 1 0 0 0 1.414-1.414L11.414 10l2.934-2.934z"/>
                </svg>
            </button>
        </div>
    @endif
    <div class="w-[70%] m-auto bg-white shadow-lg rounded-lg p-6">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-700">Student List</h2>    
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                <a href="{{ url("/create") }}">Add Teacher</a>
            </button>
        </div>

        <div class="w-full">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Age</th>
                        <th class="py-3 px-4 text-left">Gender</th>
                        <th class="py-3 px-4 text-left">Major</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($data as $value)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-2 px-4">{{$value['id']}}</td>
                            <td class="py-2 px-4">{{ $value['name'] }}</td>
                            <td class="py-2 px-4">{{ $value['age'] }}</td>
                            <td class="py-2 px-4">{{ $value['gender'] }}</td>
                            <td class="py-2 px-4">{{ $value['major'] }}</td>
                            <td class="py-2 px-4">{{ $value['email'] }}</td>
                            <td>
                                <a href="{{ url("/show",$value['id']) }}" class="btn btn-info">view</a>
                            </td>
                            <td><a href="{{ url("/destroy",$value['id']) }}" class="btn btn-danger">remove</a></td>
                        </tr>
                    @endforeach   
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>
