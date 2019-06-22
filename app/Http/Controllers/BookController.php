<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Nxb;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function BookList(){
        // Lay tat ca
        //$books = Book::all();

        // Lay co dieu kien
//        $books = Book::where("qty","<",100)
//            ->where("book_id","<",100)
//            ->orderBy("qty","asc")
//            ->select(["book_id","book_name","qty"])
//            ->get();

        // Lay so luong cu the
//        $books = Book::orderBy("qty","asc")
//            ->skip(20)
//            ->take(10)
//            ->select(["book_id","book_name","qty"])
//            ->get();

        // Lay co phan trang
        $books = Book::orderBy("qty","asc")
                ->paginate(10);

        return view("book.list",compact("books"));
    }

    public function BookCreate(){
        $authors = Author::where("active",1)->orderBy("author_name","asc")
            ->select(["author_id","author_name"])->get();
        $nxbs = Nxb::where("active",1)->orderBy("nxb_name","asc")
            ->select(["nxb_id","nxb_name"])->get();
        return view("book.form",compact("authors","nxbs"));
    }

    public function BookSave(Request $request){
        $this->validate($request,[
            "book_name" => "required|min:6|max:100|unique:book",
            "author_id" => "required|numeric|min:1",
            "nxb_id" => "required|numeric|min:1",
            "qty" => "required|numeric|min:1",
        ]);
        Book::create([
            "book_name"=> $request->get("book_name"),
            "author_id"=> $request->get("author_id"),
            "nxb_id"=> $request->get("nxb_id"),
            "qty"=> $request->get("qty"),
        ])->save();
        return redirect("book");
    }
}
