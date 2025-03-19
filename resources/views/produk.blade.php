<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Heru di Ketileng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card {
            border: 1px solid #ccc;
            padding: 15px;
            width: 250px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%;
            border-radius: 8px;
        }
        .product-card h3 {
            margin: 10px 0;
            color: #2c3e50;
        }
        .product-card p {
            color: #7f8c8d;
        }
        .product-card a {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
        }
        .product-card a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Produk Heru di Ketileng</h1>
    <h2>Kategori:</h2>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>

    <h2>Daftar Produk:</h2>
    <div class="product-container">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                <h3>{{ $product['name'] }}</h3>
                <p>Harga: {{ $product['price'] }}</p>
                <a href="/chekout?product={{ $product['name'] }}&price={{ $product['price'] }}">Beli Sekarang</a>
            </div>
        @endforeach
    </div>
</body>
</html>