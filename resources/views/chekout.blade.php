<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Heru di Ketileng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            color: #7f8c8d;
        }
        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Checkout</h1>
    <p>Anda akan membeli:</p>
    <ul>
        <li>Produk: {{ $product }}</li>
        <li>Harga: {{ $price }}</li>
    </ul>
    <form action="/process-checkout" method="POST">
        @csrf
        <button type="submit">Konfirmasi Pembelian</button>
    </form>
</body>
</html>