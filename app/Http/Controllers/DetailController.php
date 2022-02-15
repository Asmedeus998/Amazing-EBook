<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use App\Models\Order;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        // get all data

        $ebook = EBook::all()->where('ebook_id', $id);
        // dd($ebook);
        return view('detail', ['ebook' => $ebook]);

        // get all order data
        // $order = Order::all();
        // // debug access ebook from Order
        // dd($order[0]->ebook);
        // return view('detail', ['order' => $order]);
    }
}
