<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    {{-- Message --}}
    @if (session('error'))
        <div class="alert alert-danger fade show position-fixed  top-5 end-50 m-3 px-2 py-1 small shadow"
            style="z-index:1055;">
            {{ session('error') }}
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success fade show position-fixed top-5 end-50 m-3 px-2 py-1 small shadow"
            style="z-index:1055;">
            {{ session('message') }}
        </div>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
            <h5 class="modal-title" id="edit">Edit Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btn_save">Save changes</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btn_edit">Edit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="w-full max-w-5xl bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="flex items-center justify-between p-3 border-b">
                <h1 class="text-2xl font-bold text-gray-700">Product List</h1>
                <button type="button" id="Add_Product" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Add Product
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Product Name</th>
                            <th class="px-4 py-3">Quantity</th>
                            <th class="px-4 py-3">Price ($)</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Total ($)</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($data as $value)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3">{{ $value['id'] }}</td>
                                <td class="px-4 py-3">{{ $value['name'] }}</td>
                                <td class="px-4 py-3">{{ $value['quantity'] }}</td>
                                <td class="px-4 py-3">{{ $value['price'] }}</td>
                                <td class="px-4 py-3">{{ $value['category'] }}</td>
                                <td class="px-4 py-3 font-semibold">{{ $value['total'] }}</td>

                                <!-- Action column -->
                                <td class="px-4 py-3 space-x-2">
                                    <a href="{{ url('/show',$value['id']) }}" class="btn btn-info btn-sm">View</a>
                                    {{-- <a href="{{ url('/destroy',$value['id']) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <a href="{{ url('/destroy',$value['id']) }}"  class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure to Delete Product : {{ $value['id'] }}??')">
                                        Delete
                                    </a>
                                    <a href="" class="btn btn-outline-info btn-sm" id="edit_product" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
<script>
    $(document).ready(function(){
        $('#Add_Product').click(function(){
            $('#exampleModalLabel').show();
            $('#edit').hide();
            $('#btn_save').show();
            $('#btn_edit').hide();
        });
        $('#edit_product').click(function(){
            $('#edit').show();
            $('#exampleModalLabel').hide();
            $('#btn_edit').show();
            $('#btn_save').hide();
        });
    });
</script>