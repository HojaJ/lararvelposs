<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Highly Nested Resources</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="book">
                <h1>Book</h1>
                <dl>
                    <dt>Name</dt>
                    <dd>{{ $book->name }}</dd>
                    <dt>Year</dt>
                    <dd>{{ $book->year }}</dd>
                    <dt>Description</dt>
                    <dd>{{ $book->description }}</dd>
                    <dt>Number of posts</dt>
                    <dd>{{ $book->posts()->count() }}</dd>
                </dl>
            </div>

            <hr />

            <div class="post">
                <h2>Post</h2>
                <dl>
                    <dt>Name</dt>
                    <dd>{{ $post->name }}</dd>
                    <dt>Description</dt>
                    <dd>{{ $post->description }}</dd>
                    <dt>Sum of votes</dt>
                    <dd>{{ $post->comments()->sum('vote') }}/{{ $post->comments()->count() * 5 }}</dd>
                </dl>
            </div>

            <hr />

            <div class="comment">
                <h3>Comment</h3>
                <dl>
                    <dt>User Commented</dt>
                    <dd>{{ $comment->user()->first()->name }}</dd>
                    <dt>Vote</dt>
                    <dd>
                        @for($i = 0; $i < $comment->vote; $i++)
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        @endfor
                        @for($i = $comment->vote; $i < 5; $i++)
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        @endfor
                        {{ $comment->vote }}</dd>
                    <dt>Body</dt>
                    <dd>{{ $comment->body }}</dd>
                </dl>
            </div>

        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>