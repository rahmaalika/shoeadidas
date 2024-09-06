<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        User::create([
            'name' => 'alika',
            'email' => 'alyka@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Produk::create([
            'name' => 'adidas',
            'jumlah' => '2',
            'kategori' => 'sepatu',
            'harga' => '30000',
            'gambar' => '',
            // 'deskripsi' => '',
            'stok' => '100'
        ]);
    }
}
