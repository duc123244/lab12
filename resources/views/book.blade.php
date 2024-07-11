<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <img src="{{URL('image/1.jpg')}}">
    <br>
    <p>Author: {{ $book->author }}</p>
    <p>Publisher: {{ $book->publisher }}</p>
    <p>Publication Date: {{ $book->publication }}</p>
    <p>Price: ${{ $book->price }}</p>
    <p>Quantity: {{ $book->quantity }}</p>
    <p>Category: {{$book->category_id}}</p>
</body>
</html>
