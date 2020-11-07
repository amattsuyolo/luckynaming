<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        Post::unguard();
        factory(Post::class, 10)->create();
        // DB::table('posts')->insert([
        //     'title' => Str::random(10),
        //     'subtitle' => Str::random(10),
        //     'body' => Str::random(50),
        //     'is_published' => 0
        // ]);
        Post::reguard();
    }
}
