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
        User::factory(3)->create();
        
        // User::create([
        //     'name' => 'reinhard',
        //     'email' => 'rein@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jackson',
        //     'email' => 'jack@gmail.com',
        //     'password' => bcrypt('0852')
        // ]);

        Category::create([
            'nama' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'ini hanya coba doang kok 1',
    //         'body' => 'ahsidfhaihdsifh haisdfhiasjfiajis dhaifjasijfiash haisjfiasjf',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' => 'judul-ke-dua',
    //         'excerpt' => 'ini hanya coba doang kok 2',
    //         'body' => 'ahsidfhaihdsifh hais faksdfkalskf kasfkaklk dfhiasjfiajis dhaifjasijfiash haisjfiasjf',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Ketiga',
    //         'slug' => 'judul-ke-tiga',
    //         'excerpt' => 'ini hanya coba doang kok 3',
    //         'body' => 'ahsidfhaihdsifh haisdfhiasjfiajis dhaifjasijfiash haisjfiasjf',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Keempat',
    //         'slug' => 'judul-ke-empat',
    //         'excerpt' => 'ini hanya coba doang kok 4',
    //         'body' => 'ahsidfhaihdsifh haisdfhiasjfiajis dhaifjasijfiash haisjfiasjf',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);
    }
}
