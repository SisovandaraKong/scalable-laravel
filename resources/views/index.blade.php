<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
</head>
<body>
    <h1>Product List (From Cache)</h1>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>
