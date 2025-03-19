<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/riwayat', function () {
    return view('riwayat', [
        'orders' => [
            ['id' => '#12345', 'product' => 'Laptop Gaming', 'total' => 'Rp15.000.000', 'date' => '18 Maret 2025', 'status' => 'Selesai'],
            ['id' => '#12346', 'product' => 'Kaos Polos', 'total' => 'Rp200.000', 'date' => '17 Maret 2025', 'status' => 'Sedang Dikirim']
            ]
        ]);
    });
    
    Route::get('/keranjang', function () {
        return view('keranjang', [
            'cart_items' => [
                ['name' => 'Laptop Gaming', 'price' => 'Rp15.000.000', 'quantity' => 1, 'total' => 'Rp15.000.000'],
                ['name' => 'Kaos Polos', 'price' => 'Rp100.000', 'quantity' => 2, 'total' => 'Rp200.000']
            ],
            'total' => 'Rp15.200.000'
        ]);
    });

Route::get('/chekout', function () {
    return view('chekout', [
        'product' => request('product', ''),
        'price' => request('price', '')
    ]);
});
 
Route::get('/produk', function () {
    return view('produk', [
        'categories' => ['Peralatan Rumah Tangga', 'Makanan & Minuman', 'Pakaian', 'Elektronik'],
        'products' => [
            ['name' => 'Panci Stainless', 'price' => 'Rp150.000', 'image' => 'https://via.placeholder.com/300x200', 'id' => 1],
            ['name' => 'Keripik Singkong', 'price' => 'Rp20.000', 'image' => 'https://via.placeholder.com/300x200', 'id' => 2],
            ['name' => 'Kaos Katun', 'price' => 'Rp75.000', 'image' => 'https://via.placeholder.com/300x200', 'id' => 3],
            ['name' => 'Kipas Angin', 'price' => 'Rp300.000', 'image' => 'https://via.placeholder.com/300x200', 'id' => 4]
            ]
        ]);
    });

    Route::post('/process-checkout', function () {
        return redirect('/riwayat');
    });