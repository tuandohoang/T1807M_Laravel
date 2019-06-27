@extends("book.book_layout")

@section("main_content")
    <h1>Quản lý sách</h1>
    @if(Session::has("message"))
        <div class="alert alert-success" role="alert">
            {{Session::get("message")}}
        </div>
    @endif
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Book name</th>
        <th>Author</th>
        <th>NXB</th>
        <th>Qty</th>
        <th>Action</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->book_id}}</td>
                <td>{{$book->book_name}}</td>
                <td>{{$book->getAuthor->author_name}}</td>
                <td>{{$book->nxb_id}}</td>
                <td>{{$book->qty}}</td>
                <td><a class="btn btn-warning" href="{{url("book/edit?book_id=".$book->book_id)}}">Edit</a> </td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{url("book/delete/".$book->book_id)}}">Delete</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $books->links() !!}
    <a href="{{ url("book/create") }}" class="btn btn-danger">Tạo sách mới</a>
@endsection