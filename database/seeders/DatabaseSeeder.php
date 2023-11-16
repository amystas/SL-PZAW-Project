<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $testAuthor = Author::create([
            'author_name' => 'Damian Worytko',
            'author_bio' => 'cute little bebi'
        ]);
        $testCategory = Category::create([
            'category_name' => 'category'
        ]);
        Article::create([
            'title' => 'test title',
            'author_id' => $testAuthor->id,
            'content' => 'test content',
            'category_id' => $testCategory->id
        ]);

    }
}
