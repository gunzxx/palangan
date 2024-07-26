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
            'name' => 'Keripik singkong bapak Hasan',
            'seller' => 'Bapak Hasan',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 5000,
            'contact' => '+6281234567890',
        ]);

        Product::create([
            'name' => 'Marning ibu Nami',
            'seller' => 'Ibu Nami',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 10000,
            'contact' => '+6281234567890',
        ]);

        Product::create([
            'name' => 'Kue Basah Mama Ega',
            'seller' => 'Mama Ega',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 5000,
            'contact' => '+6281234567890',
        ]);

        Product::create([
            'name' => 'Nafifah Cake',
            'seller' => 'Ibu Zakiah',
            'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt hic reiciendis error quae molestiae rem suscipit, provident cumque natus veritatis!',
            'price' => 10000,
            'contact' => '+6281234567890',
        ]);
    }
}
