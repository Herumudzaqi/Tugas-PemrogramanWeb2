<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian - Heru di Ketileng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #3498db;
            color: #fff;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Riwayat Pembelian</h1>
    <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order['id'] }}</td>
                    <td>{{ $order['product'] }}</td>
                    <td>{{ $order['total'] }}</td>
                    <td>{{ $order['date'] }}</td>
                    <td>{{ $order['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/produk">Kembali ke Daftar Produk</a>
</body>
</html>