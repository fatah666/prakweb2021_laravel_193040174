<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Garis Waktu",
            "slug" => "judul-post-pertama",
            "author" => "Ujang Fatah A.K",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt."
        ],
        [
            "title" => "Konspirasi Alam Semesta",
            "slug" => "judul-post-kedua",
            "author" => "ngaju hataf",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt."
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
