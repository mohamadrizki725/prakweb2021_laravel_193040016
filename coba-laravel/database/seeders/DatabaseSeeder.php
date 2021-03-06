<?php

namespace Database\Seeders;

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
        

        User::create([
            'name' => 'mohamad rizki ramdani',
            'username' => 'mohamadrizkiramdani',
            'email' => 'mohamadrizki@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'rizki',
        //     'email' => 'rizki@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'web desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.',
        //     'body' => 'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
