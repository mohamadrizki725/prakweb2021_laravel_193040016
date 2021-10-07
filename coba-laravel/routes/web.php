<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mohamad Rizki Ramdani",
        "email" => "mohamadrizki@gmail.com",
        "image" => "rizki.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mohamad Rizki Ramdani",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum, hic doloribus vel provident natus obcaecati expedita eligendi quos fugiat dolorum porro voluptas quae animi consectetur aut a quas laborum eos enim tenetur blanditiis? Voluptatibus cupiditate sint possimus! Ipsam quam dolorem ut fugiat similique ducimus, amet ad voluptates adipisci sit sunt odio porro, quo possimus veniam, eligendi aspernatur quae sapiente corporis facere accusantium vel doloribus! Illum nesciunt laudantium perferendis aspernatur, mollitia tenetur provident minima dolorum facere quisquam reprehenderit, possimus qui."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Moh Rizki",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum, hic doloribus vel provident natus obcaecati expedita eligendi quos fugiat dolorum porro voluptas quae animi consectetur aut a quas laborum eos enim tenetur blanditiis? Voluptatibus cupiditate sint possimus! Ipsam quam dolorem ut fugiat similique ducimus, amet ad voluptates adipisci sit sunt odio porro, quo possimus veniam, eligendi aspernatur quae sapiente corporis facere accusantium vel doloribus! Illum nesciunt laudantium perferendis aspernatur, mollitia tenetur provident minima dolorum facere quisquam reprehenderit, possimus qui."
        ],
        ]; 
        

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
 
// halaman single post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mohamad Rizki Ramdani",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum, hic doloribus vel provident natus obcaecati expedita eligendi quos fugiat dolorum porro voluptas quae animi consectetur aut a quas laborum eos enim tenetur blanditiis? Voluptatibus cupiditate sint possimus! Ipsam quam dolorem ut fugiat similique ducimus, amet ad voluptates adipisci sit sunt odio porro, quo possimus veniam, eligendi aspernatur quae sapiente corporis facere accusantium vel doloribus! Illum nesciunt laudantium perferendis aspernatur, mollitia tenetur provident minima dolorum facere quisquam reprehenderit, possimus qui."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Moh Rizki",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum, hic doloribus vel provident natus obcaecati expedita eligendi quos fugiat dolorum porro voluptas quae animi consectetur aut a quas laborum eos enim tenetur blanditiis? Voluptatibus cupiditate sint possimus! Ipsam quam dolorem ut fugiat similique ducimus, amet ad voluptates adipisci sit sunt odio porro, quo possimus veniam, eligendi aspernatur quae sapiente corporis facere accusantium vel doloribus! Illum nesciunt laudantium perferendis aspernatur, mollitia tenetur provident minima dolorum facere quisquam reprehenderit, possimus qui."
        ],
        ]; 

        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});