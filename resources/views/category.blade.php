<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }}</title>
</head>
<body>
    <h1>Books in {{ $category->name }}</h1>
    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
