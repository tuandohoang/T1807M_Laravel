<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Listing</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">
    <h1>Quản lý sách</h1>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Book name</th>
            <th>Author</th>
            <th>NXB</th>
            <th>Qty</th>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$book->book_id}}</td>
                <td>{{$book->book_name}}</td>
                <td>{{$book->author_id}}</td>
                <td>{{$book->nxb_id}}</td>
                <td>{{$book->qty}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $books->links() !!}
    <a href="{{ url("book/create") }}" class="btn btn-danger">Tạo sách mới</a>
</div>
</body>
</html>