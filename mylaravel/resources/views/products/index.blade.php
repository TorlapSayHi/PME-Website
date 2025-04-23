<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img src="{{ asset('storage/products/' . $product->image) }}" style="width: 100px; height: auto;"></td>
                    <td>{{ $product->price }}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" required class="form-control" placeholder="Product Name">
        <input type="text" name="description" required class="form-control" placeholder="Description">
        <input type="number" name="price" required class="form-control" placeholder="Price">
        
        <input type="file" name="image"> <!-- image upload -->
        
        <button type="submit">Save</button>
        
    </form>
    <a href="{{ route('home') }}" class="btn">Go to Homepage</a>
</body>
</html>