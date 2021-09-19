<?php

use Illuminate\Database\Seeder;
use App\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Blog::create([
            'title' => 'First Post',
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptas eos quibusdam nam. Enim amet et voluptate voluptatum facilis est!"
        ]);
        Blog::create([
            'title' => 'Second Post',
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptas eos quibusdam nam. Enim amet et voluptate voluptatum facilis est!"
        ]);
        Blog::create([
            'title' => 'Third Post',
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptas eos quibusdam nam. Enim amet et voluptate voluptatum facilis est!"
        ]);
    }
}
