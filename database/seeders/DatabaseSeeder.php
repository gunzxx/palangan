<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
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
            'name' => 'Admin KUMPALA',
            'email' => 'admin@kumpala.id',
            'password' => bcrypt('password'),
        ]);

        Product::create([
            'name' => 'produk 1',
            'seller' => 'penjual 1',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 15000,
            'contact' => '+6281234567890',
        ]);

        Product::create([
            'name' => 'produk 2',
            'seller' => 'penjual 2',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 10000,
            'contact' => '+6281234567890',
        ]);

        Product::create([
            'name' => 'produk 3',
            'seller' => 'penjual 3',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 5000,
            'contact' => '+6281234567890',
        ]);

        Product::create([
            'name' => 'produk 4',
            'seller' => 'penjual 4',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 25000,
            'contact' => '+6281234567890',
        ]);
    }
}
