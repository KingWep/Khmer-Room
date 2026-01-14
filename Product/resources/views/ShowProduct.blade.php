<!-- resources/views/product-detail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-start p-6">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-2xl p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Product Detail</h1>
            <a href="{{ url('/') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Back</a>
        </div>

        <!-- Product Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p class="font-semibold text-gray-600">Name</p>
                <p class="text-gray-800">{{ $select[ 'name'] }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-600">Category</p>
                <p class="text-gray-800">{{ $select['category'] }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-600">Price</p>
                <p class="text-gray-800">${{ number_format($select['price'], 2) }}</p>
            </div>
            <div>
                <p class="font-semibold text-gray-600">Quantity</p>
                <p class="text-gray-800">{{ $select['quantity'] }}</p>
            </div>
            <div class="col-span-1 md:col-span-2">
                <p class="font-semibold text-gray-600">Total</p>
                <p class="text-gray-800">${{ number_format($select['price'] * $select['quantity'], 2) }}</p>
            </div>
        </div>
    </div>

</body>
</html>
