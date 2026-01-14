<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
</head>
<body>
    <nav class=" w-full h-20 bg-black text-white flex justify-center  items-center">
        <ul class=" flex w-[20%]  justify-between items-center text-md">
            <li>
                <a class=" hover:border-b-5 border-blue-500 pb-5" href="{{ url('/home')}}">Home</a>
            </li>
            <li>
                <a class=" hover:border-b-5 border-blue-500 pb-5" href="">About</a>
            </li>
            <li>
                <a class=" hover:border-b-5 border-blue-500 pb-5" href="">Contact</a>
            </li>
            <li>
                <a class=" hover:border-b-5 border-blue-500 pb-5" href="">Ot-Dg</a>
            </li>
        </ul>
    </nav>
</body>
</html>
