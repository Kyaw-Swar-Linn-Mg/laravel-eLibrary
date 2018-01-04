<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    public function getDashboard(Request $request)
    {
        $q = $request['q'];
        $cats = Category::all();
        $books = Book::where('title','like',"%$q%")->paginate('6');
        return view('admin/dashboard')->with(['cat'=>$cats])->with(['book'=>$books]);
    }

    public function getNewCategories()
    {

        return view('admin/new_category');
    }

    public function getNewBook(){
        $cats = Category::all();
        return view('admin/new_book')->with(['cat'=>$cats]);
    }

    public function getShowBook(Request $request){
        $q = $request['q'];
        $cats = Category::all();
        $books = Book::where('title','like',"%$q%")->paginate('6');
        $books=Book::OrderBy('id', 'desc')->paginate("6");
        return view ('admin/show_book')->with(['cats'=>$cats])->with(['book'=>$books]);
    }

    public function getShowCategories()
    {
        $cats = Category::all();
        return view('admin/show_categories')->with(['cats'=>$cats]);
    }

    public function postNewCategories(Request $request)
    {
        $this->validate($request, [
            'cat_name' => 'required|unique:categories'
        ]);
        $cat = new Category();
        $cat->cat_name = $request['cat_name'];

        $cat->save();
        return redirect()->back()->with('info', 'New Category have been added.');

    }

    public function getImage($cover_img){
        $file = Storage::disk('cover')->get($cover_img);
        return response($file,200)->header('Content-Type','jpeg/jpg/png');
    }

    public function getBook($book_file){
        $file = Storage::disk('book')->get($book_file);
        return response($file,200)->header('Content-Type','*/*');
    }

    public function postNewBook(Request $request){
        $this->validate($request,[
           'title'=>'required',
            'author'=>'required',
            'category'=>'required',
            'cover_img'=>'required|mimes:jpg,jpeg,png',
            'book_file'=>'required|mimes:pdf'

        ]);

        $cover = $request->file('cover_img');
        $cover_ext = $request->file('cover_img')->getClientOriginalExtension();
        $cover_name = $request['title'].'.'.$cover_ext;

        $book = $request->file('book_file');
        $book_ext = $request->file('book_file')->getClientOriginalExtension();
        $book_name = $request['title'].'.'.$book_ext;

        $books = new Book();
        $books->title=$request['title'];
        $books->author=$request['author'];
        $books->cat_id=$request['category'];
        $books->cover_img=$cover_name;
        $books->book_file=$book_name;

        $books->save();

        Storage::disk('cover')->put($cover_name, file($cover));
        Storage::disk('book')->put($book_name, file($book));

        return redirect()->back();

    }


}
