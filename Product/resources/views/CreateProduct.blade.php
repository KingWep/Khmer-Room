{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Form</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @if (session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                onclick="this.parentElement.style.display='none';">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 5.652a1 1 0 1 0-1.414-1.414L10 7.586 7.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 1 0 1.414 1.414L10 12.414l2.934 2.934a1 1 0 0 0 1.414-1.414L11.414 10l2.934-2.934z" />
                </svg>
            </button>
        </div>
    @endif
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg w-100 max-w-md">
            <div class="card-body p-4">
                <h2 class="text-center text-2xl font-bold mb-4">
                    Product Form
                </h2>
                <form action="{{ url("/store") }}" method="post" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block font-semibold">Product Name</label>
                        <input type="text" name="name" class="form-control mt-1" value="{{ old('name') }}"
                            placeholder="Enter product name">
                        @error("name")
                            <span class=" text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold">Price</label>
                        <input type="number" name="price" value="{{ old('price') }}" step="0.01"
                            class="form-control mt-1" placeholder="Enter price">
                        @error("price")
                            <span class=" text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold">Quantity</label>
                        <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control mt-1"
                            placeholder="Enter quantity">
                        @error("quantity")
                            <span class=" text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold">Category</label>
                        <select name="category" class="form-select mt-1">
                            <option value="" disabled {{ old('category') ? '' : 'selected' }}>Category</option>
                            <option value="Electronics" {{ old('category') == 'Electronics' ? 'selected' : '' }}>
                                Electronics</option>
                            <option value="Clothing" {{ old('category') == 'Clothing' ? 'selected' : '' }}>Clothing
                            </option>
                            <option value="Food" {{ old('category') == 'Food' ? 'selected' : '' }}>Food</option>
                            <option value="Other" {{ old('category') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error("category")
                            <span class=" text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <button type="submit"
                        class="inline-block btn btn-primary hover:bg-green-700 text-white font-semibold px-lg-4 py-2 rounded-lg shadow transition duration-200">
                        Submit
                    </button> --}}
                </form>
            </div>
        </div>
    </div>

</body>

</html> --}}