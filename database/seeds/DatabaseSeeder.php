<?php

use Illuminate\Database\Seeder;

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

        $user = factory(App\User::class)->create([
           'name' => 'John Doe'
        ]);

        $book = factory(App\Book::class)->create([
            'name' => 'A Mighty Book Name',
            'slug' => 'mighty-book-name',
            'year' => 2016
        ]);

        $post = factory(App\Post::class)->create([
            'name' => 'This is a post from a book',
            'slug' => 'awesome-post-slug',
            'book_id' => $book->id
        ]);

        $comment = factory(App\Comment::class)->create([
            'id' => 1,
            'body' => 'I loved reading this post from this book',
            'vote' => 4,
            'post_id' => $post->id,
            'user_id' => $user->id
        ]);
    }
}
