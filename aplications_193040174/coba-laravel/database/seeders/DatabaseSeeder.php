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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'ujang fatah',
            'email' => '193040174@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'dodi gemah',
            'email' => '193040177@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit doloremque autem quidem quo delectus modi debitis iure rem impedit, id dolores voluptatum, illo at quas! Suscipit odio corrupti minima!',
            'body' => '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, accusamus eius fugiat aut ipsum commodi labore, et neque, ducimus quod quasi alias facere! Exercitationem facere consectetur eveniet perferendis soluta molestias maiores voluptatum cum tempora rem! Saepe blanditiis molestiae pariatur quae quia esse illum, quas earum labore, deserunt unde ullam aperiam cum. Accusantium ad voluptatibus minima, incidunt quae in adipisci soluta pariatur dicta, quibusdam qui possimus aliquid dolores maxime minus fugiat assumenda voluptates sequi magnam nostrum odit vitae nisi laudantium dolor? Aperiam obcaecati voluptatum temporibus voluptates quos modi necessitatibus sed quidem, inventore unde earum, cum tempore aliquid dignissimos nam qui eum!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit doloremque autem quidem quo delectus modi debitis iure rem impedit, id dolores voluptatum, illo at quas! Suscipit odio corrupti minima!',
            'body' => '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, accusamus eius fugiat aut ipsum commodi labore, et neque, ducimus quod quasi alias facere! Exercitationem facere consectetur eveniet perferendis soluta molestias maiores voluptatum cum tempora rem! Saepe blanditiis molestiae pariatur quae quia esse illum, quas earum labore, deserunt unde ullam aperiam cum. Accusantium ad voluptatibus minima, incidunt quae in adipisci soluta pariatur dicta, quibusdam qui possimus aliquid dolores maxime minus fugiat assumenda voluptates sequi magnam nostrum odit vitae nisi laudantium dolor? Aperiam obcaecati voluptatum temporibus voluptates quos modi necessitatibus sed quidem, inventore unde earum, cum tempore aliquid dignissimos nam qui eum!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi reprehenderit doloremque autem quidem quo delectus modi debitis iure rem impedit, id dolores voluptatum, illo at quas! Suscipit odio corrupti minima!',
            'body' => '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, accusamus eius fugiat aut ipsum commodi labore, et neque, ducimus quod quasi alias facere! Exercitationem facere consectetur eveniet perferendis soluta molestias maiores voluptatum cum tempora rem! Saepe blanditiis molestiae pariatur quae quia esse illum, quas earum labore, deserunt unde ullam aperiam cum. Accusantium ad voluptatibus minima, incidunt quae in adipisci soluta pariatur dicta, quibusdam qui possimus aliquid dolores maxime minus fugiat assumenda voluptates sequi magnam nostrum odit vitae nisi laudantium dolor? Aperiam obcaecati voluptatum temporibus voluptates quos modi necessitatibus sed quidem, inventore unde earum, cum tempore aliquid dignissimos nam qui eum!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
