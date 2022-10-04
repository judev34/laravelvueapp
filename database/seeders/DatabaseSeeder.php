<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Customer::factory(15)->create();

        User::factory()
            ->count(10)
            ->has(
                Order::factory()
                    ->count(3)
                    ->hasAttached(
                        Product::factory()->count(5),
                        [
                            'total_price' => rand(100, 500), 
                            'total_quantity' => rand(1, 3)
                        ]
                    )
            )
            ->has(
                Post::factory()
                    ->count(rand(2, 4))
                    ->has(
                        Comment::factory()
                            ->count(rand(6, 7)),
                    )
            )
            ->create();
    }
}
