<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Shelva Aurora',
            'username' => 'shelvaaurora',
            'email' => 'ytta@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, esse. Officia eius perspiciatis quas voluptates illo, ullam repellat, impedit facere alias voluptatibus ex necessitatibus quisquam atque minus consectetur quidem id. Aspernatur optio numquam nemo totam iste ipsa asperiores beatae corporis, magni eius, maxime sequi aliquam iure! Aut explicabo obcaecati optio. Tempora officiis esse dolorum fugit cum amet maxime mollitia expedita veritatis inventore sit quidem ducimus, voluptates voluptatem quibusdam, eligendi veniam cumque doloribus. Assumenda, eius. Adipisci ea rem nobis similique porro!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, esse. Officia eius perspiciatis quas voluptates illo, ullam repellat, impedit facere alias voluptatibus ex necessitatibus quisquam atque minus consectetur quidem id. Aspernatur optio numquam nemo totam iste ipsa asperiores beatae corporis, magni eius, maxime sequi aliquam iure! Aut explicabo obcaecati optio. Tempora officiis esse dolorum fugit cum amet maxime mollitia expedita veritatis inventore sit quidem ducimus, voluptates voluptatem quibusdam, eligendi veniam cumque doloribus. Assumenda, eius. Adipisci ea rem nobis similique porro!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, esse. Officia eius perspiciatis quas voluptates illo, ullam repellat, impedit facere alias voluptatibus ex necessitatibus quisquam atque minus consectetur quidem id. Aspernatur optio numquam nemo totam iste ipsa asperiores beatae corporis, magni eius, maxime sequi aliquam iure! Aut explicabo obcaecati optio. Tempora officiis esse dolorum fugit cum amet maxime mollitia expedita veritatis inventore sit quidem ducimus, voluptates voluptatem quibusdam, eligendi veniam cumque doloribus. Assumenda, eius. Adipisci ea rem nobis similique porro!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
