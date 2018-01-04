<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function getWelcome(){

        $cat=Category::all();
       $books=Book::OrderBy('id', 'desc')->paginate("6");
        return view ('welcome')->with(['cat'=>$cat])->with(['book'=>$books]);
    }

    public function getBookByCatId($cat_id){
        $cat=Category::all();
        $books=Book::where('cat_id', $cat_id)->paginate('6');
        return view ('welcome')->with(['cat'=>$cat])->with(['book'=>$books]);
    }

    public function getRegister(){

        $cats = Category::all();

        return view('auth/register')->with(['cat'=>$cats]);
    }

    public function getLogin(){
        $cats = Category::all();
        return view('auth/login')->with(['cat'=>$cats]);
    }

    public function getSearch(Request $request){
        $q = $request['q'];
        $cats = Category::all();
        $books = Book::where('title','like',"%$q%")->paginate('6');
        return view('welcome')->with(['cat'=>$cats])->with(['book'=>$books]);
    }



}
