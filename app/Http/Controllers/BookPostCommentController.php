<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookPostCommentController extends Controller
{
    /**
     * Display the specified resource.
     *
     * Suggestion!
     * I suggest using eager loading on books query
     * to eager load posts and comments. And then you use
     * collection methods to handle data.
     *
     * @param string $book_slug
     * @param string $post_slug
     * @param int $comment_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show($book_slug, $post_slug, $comment_id)
    {
        // First we find the book by slug
        $book = \App\Book::where('slug', $book_slug)->firstOrFail();

        // Then we find the post from that book
        $post = $book->posts()->where('slug', $post_slug)->firstOrFail();

        // Finally, we find the comment by comment id from that post
        $comment = $post->comments()->findOrFail($comment_id);

        return view('books.posts.comments.show')
            ->with(compact('book', 'post','comment'));
    }
}
