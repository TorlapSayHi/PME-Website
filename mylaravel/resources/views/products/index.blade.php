<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Product List</h1>

    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="min-w-full bg-white text-sm text-left text-gray-700">
            <thead class="bg-gray-200 text-xs uppercase">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Picture</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b {{ $loop->even ? 'bg-gray-50' : 'bg-white' }}">
                    <td class="px-6 py-4">{{ $product->id }}</td>
                    <td class="px-6 py-4">{{ $product->name }}</td>
                    <td class="px-6 py-4">{{ $product->description }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/images/' . $product->image) }}" class="w-24 rounded">
                    </td>
                    <td class="px-6 py-4 font-semibold text-green-600">${{ number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <button onclick="editProduct({{ $product->id }}, '{{ $product->name }}', '{{ $product->description }}', {{ $product->price }}, '{{ $product->image }}')" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded">Edit</button>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Destroy</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-center mb-4">Add New Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="text" name="name" required placeholder="Product Name" class="w-full p-3 border border-gray-300 rounded">
            <textarea name="description" required placeholder="Description" class="w-full p-3 border border-gray-300 rounded resize-none"></textarea>
            <input type="number" name="price" required placeholder="Price" class="w-full p-3 border border-gray-300 rounded">
            <input type="file" name="image" class="w-full p-3 border border-gray-300 rounded">
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white p-3 rounded">Save</button>
        </form>
        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="text-blue-600 hover:underline">Go to Homepage</a>
        </div>
    </div>

    <script>
        function editProduct(id, name, description, price, image) {
            Swal.fire({
        title: 'Edit Product',
        html: `
            <input id="swal-input-name" class="swal2-input" placeholder="Name" value="${name}">
            <textarea id="swal-input-description" class="swal2-textarea" placeholder="Description">${description}</textarea>
            <input id="swal-input-price" type="number" class="swal2-input" placeholder="Price" value="${price}">
            <div class="mt-2">
                <label>Current Image:</label><br>
                <img src="{{ asset('storage/images') }}/${image}" class="w-24 rounded my-2">
                <input id="swal-input-image" type="file" class="swal2-file">
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: 'Save',
        preConfirm: () => {
            const newName = document.getElementById('swal-input-name').value;
            const newDescription = document.getElementById('swal-input-description').value;
            const newPrice = document.getElementById('swal-input-price').value;
            const newImage = document.getElementById('swal-input-image').files[0];

            if (!newName || !newDescription || !newPrice) {
                Swal.showValidationMessage('All fields are required');
                return false;
            }

            return { name: newName, description: newDescription, price: newPrice, image: newImage };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('name', result.value.name);
            formData.append('description', result.value.description);
            formData.append('price', result.value.price);
            formData.append('_method', 'PUT'); // Laravel expects this for method spoofing
            if (result.value.image) {
                formData.append('image', result.value.image);
            }

            fetch(`/products/${id}`, {   // 👈 ใช้ path ตรงนี้
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Saved!', 'Product updated successfully.', 'success')
                        .then(() => location.reload());
                } else {
                    Swal.fire('Error!', 'Failed to update product.', 'error');
                }
            })
            .catch(() => {
                Swal.fire('Error!', 'Failed to update product.', 'error');
            });
        }
    });

        }
    </script>
</body>
</html>
