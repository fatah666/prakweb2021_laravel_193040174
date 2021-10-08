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
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Ujang Fatah Abwabal Khoer",
        "email" => "193040174@mail.unpas.ac.id",
        "image" => "profile.jpg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ujang Fatah A.K",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt."
        ],
        [
            "title" => "post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ngaju hataf",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt."
        ]
    ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

//halaman singel route
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ujang Fatah A.K",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt."
        ],
        [
            "title" => "post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ngaju hataf",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima veritatis vitae excepturi ipsa odit ratione dolorum incidunt dolor amet sint maxime libero fugit quibusdam sed eum possimus nesciunt iure nostrum adipisci at cum, consectetur nam! Minus exercitationem eveniet placeat magnam dolores! Quos, cupiditate praesentium repellat blanditiis cum incidunt similique, tenetur, aliquid nihil odit doloremque sapiente consequatur quasi sed quo iure perspiciatis ad minima facilis non? Harum minima iste ea, nihil ipsa quibusdam possimus illo perspiciatis vitae aut eum architecto sunt."
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Singelpost",
        "post" => $new_post
    ]);
});
