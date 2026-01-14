<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite('resources/css/app.css')
</head>
<body>
    <table class="w-[50%] m-auto border-collapse border border-gray-400 mt-10">
        <thead class="bg-gray-200">
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Age</th>
                <th class="border p-2">Major</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $value)
            <tr>
                <td class="border p-2">{{ $value['id'] }}</td>
                <td class="border p-2">{{ $value['name'] }}</td>
                <td class="border p-2">{{ $value['age'] }}</td>
                <td class="border p-2">{{ $value['major'] }}</td>
            </tr>    
        @endforeach
        </tbody>
    </table>
</body>
</html>
