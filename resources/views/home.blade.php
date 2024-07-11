<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
</head>
<body>
    <h1>High Price Books</h1>
    <ul>
        @foreach ($highPriceBooks as $book)
            <li>
                <a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a>
                <br>
                <img src="{{URL('image/1.jpg')}}">
                <br>
                <p href="{{ route('book.show', $book->id) }}">{{ $book->price }}</p>
                
            </li>
        @endforeach
    </ul>

    <h1>Low Price Books</h1>
    <ul>
        @foreach ($lowPriceBooks as $book)
            <li>
                <a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a>
                <br>
                <img src="{{URL('image/1.jpg')}}">
                <br>
                <p href="{{ route('book.show', $book->id) }}">{{ $book->price }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
