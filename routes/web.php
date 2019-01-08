<?php

Route::get('/', function (){
    return view('welcome');
});

Route::get('books/{book_slug}/posts/{post_slug}/comments/{comment_id}', 'BookPostCommentController@show');