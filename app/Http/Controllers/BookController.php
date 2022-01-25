<?php

namespace App\Http\Controllers;

use App\Book;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class BookController extends BaseDimmer
{
    public function run()
    {
//        $count = Product::all()->count();
//        $string = trans_choice('voyager::dimmer.post', $count);
        $book = Book::orderBy('id' , 'DESC')->get();
        return view('welcome', compact('book'));
//            'icon'   => $book,
//            'title'  => "{$count} {$string}",
//            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
//            'button' => [
//                'text' => __('voyager::dimmer.post_link_text'),
//                'link' => url('admin/products'),
//            ],
//            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
//        ]));
    }

    public function delete($order)
    {
        $delete = Book::find($order)->delete();
        if ($delete){
            return redirect('/admin');
        }
    }
    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
