@extends("book.book_layout")

@section("main_content")
    <h1>Them sach</h1>
    <form action="{{url("book/create")}}" method="post">
        @csrf
        <div class="form-group">
            <label>Ten sach</label>
            <input type="text" class="form-control" value="{{old("book_name")}}" name="book_name" placeholder="Book Name"/>
            @if($errors->has("book_name"))
                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("book_name") }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label>Author</label>
            <select name="author_id" class="form-control">
                <option value="">Chọn tác giả</option>
                @foreach($authors as $author)
                    <option @if(old("author_id") == $author->author_id) selected @endif value="{{$author->author_id}}">{{$author->author_name}}</option>
                @endforeach
            </select>
            @if($errors->has("author_id"))
                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("author_id") }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label>NXB</label>
            <select name="nxb_id" class="form-control">
                <option value="">Chọn nhà xuất bản</option>
                @foreach($nxbs as $nxb)
                    <option @if(old("nxb_id") == $nxb->nxb_id) selected @endif value="{{$nxb->nxb_id}}">{{$nxb->nxb_name}}</option>
                @endforeach
            </select>
            @if($errors->has("nxb_id"))
                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("nxb_id") }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label>Qty</label>
            <input type="text" class="form-control" value="{{old("qty")}}" name="qty" placeholder="Qty"/>
            @if($errors->has("qty"))
                <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first("qty") }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </form>
@endsection

@section("popup")
    Popup
@endsection