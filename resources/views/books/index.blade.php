<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Books</h1>

    <ul>
        @foreach($books as $book)
        <li>
            Title: {{$book->title}} <br>
            Author: {{$book->author}} <br>
            Release date: {{$book->release_date}} <br>
            <a href="/books/create">Create</a>
            <a href="/books/{{ $book->id }}/edit">Edit</a>
        </li>
        @endforeach
    </ul>
</body>
</html>