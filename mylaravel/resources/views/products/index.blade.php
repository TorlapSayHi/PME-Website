<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <h1 style="text-align: center; margin-bottom: 20px; font-family: Arial, sans-serif; color: #333;">Product List</h1>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #f4f4f4; text-align: left;">
                <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Picture</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Price</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr style="background-color: {{ $loop->even ? '#f9f9f9' : '#fff' }};">
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->id }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->name }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->description }}</td>
                    <td>
                        <img src="{{ asset('public/storage/images/' . $product->image) }}" style="width: 100px; height: auto; border-radius: 5px;">
                    </td>

                    <td style="padding: 10px; border: 1px solid #ddd;">${{ number_format($product->price, 2) }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                        <button onclick="editProduct({{ $product->id }}, '{{ $product->name }}', '{{ $product->description }}', {{ $product->price }}, '{{ $product->image }}')" style="padding: 5px 10px; background-color: #007bff; color: white; border: none; border-radius: 3px; margin-right: 5px; cursor: pointer;">Edit</button>
                        <script>
                            function editProduct(id, name, description, price, image) {
                                Swal.fire({
                                    title: 'Edit Product',
                                    html: `
                                        <input id="swal-input-name" class="swal2-input" placeholder="Name" value="${name}">
                                        <textarea id="swal-input-description" class="swal2-textarea" placeholder="Description">${description}</textarea>
                                        <input id="swal-input-price" type="number" class="swal2-input" placeholder="Price" value="${price}">
                                        <div style="margin-top: 10px;">
                                            <label for="swal-input-image">Current Image:</label><br>
                                            <img src="{{ asset('public/storage/images/') }}/${image}" style="width: 100px; height: auto; border-radius: 5px; margin-bottom: 10px;">
                                            <input id="swal-input-image" type="file" class="swal2-file">
                                        </div>
                                    `,
                                    focusConfirm: false,
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
                                        formData.append('_method', 'PUT');
                                        if (result.value.image) {
                                            formData.append('image', result.value.image);
                                        }
                                        fetch(`{{ route('products.update', ':id') }}`.replace(':id', id), {
                                            method: 'POST',
                                            headers: {
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            },
                                            body: formData // Do not set Content-Type; FormData handles it automatically
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
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 3px; cursor: pointer;">Destroy</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 20px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
        <h2 style="text-align: center; margin-bottom: 20px;">Add New Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            <input type="text" name="name" required class="form-control" placeholder="Product Name" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            <textarea name="description" required class="form-control" placeholder="Description" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; resize: none;"></textarea>
            <input type="number" name="price" class="form-control" placeholder="Price" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;" value="">
            
            <input type="file" name="image" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            
            <button type="submit" style="padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">Save</button>
        </form>
        <div style="text-align: center; margin-top: 15px;">
            <a href="{{ route('home') }}" class="btn" style="text-decoration: none; color: #007bff;">Go to Homepage</a>
        </div>
    </div>

    
                        
</body>
</html>