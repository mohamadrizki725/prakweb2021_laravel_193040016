<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
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
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            
            return $posts->firstWhere('slug', $slug);
        }
}
