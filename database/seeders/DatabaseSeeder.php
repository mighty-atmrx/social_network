<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $tags = Tag::factory(20)->create();
        $posts = Post::factory(100)->create();

        foreach ($posts as $post) {
            $tagsIds = $tags->random(rand(1, 10))->pluck('id');
            $post->tags()->attach($tagsIds);
        }
    }
}
