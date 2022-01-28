<?php

namespace App\Http\Controllers;

use App\Aboutimage;
use App\AboutText;
use App\Book;
use App\Chef;
use App\Event;
use App\Product;
use App\Special;
use App\Whyu;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        $chef = Chef::all();
        $specials = Special::all();
        $whyus = Whyu::all();
        $images = Aboutimage::first();
        $events = Event::all();
        $about = AboutText::first();
        return view('index' , compact(
            'category',
            'product',
            'chef',
            'specials',
            'whyus',
            'images',
            'events',
            'about'
        ));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->name = \request('name');
        $book->phone = \request('phone');
        $book->date = \request('date');
        $book->time = \request('time');
        $book->people = \request('people');
        $book->message = \request('message');
        $book->save();
        return redirect('/#book-a-table')->with('message', 'اطلاعات شما با موفقیت ثبت شد.');

        //        $data = $request->all();
//        $this->validate($request,[
//            'name' => 'required|string',
//            'phone' => '',
//            'date' => '',
//            'time' => '',
//            'people' => '',
//            'message' => '',
//        ]);
//        return view('welcome' , compact('data'));

    }
}
