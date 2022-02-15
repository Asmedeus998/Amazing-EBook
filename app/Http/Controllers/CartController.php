<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function view()
    {
        // get all order data
        $order = Order::all();
        // debug access ebook from Order

        // dd($order[0]->ebook);
        // get all users data
        // $users = User::all();

        // dd($users[0]->roles); //  working
        // dd($users[0]->genders); //  working
        return view('cart', ['order' => $order]);
    }

    public function add($id){
        $userId = Auth::user()->id;

        $product = EBook::where('ebook_id', $id)->first();
        // dd($product->ebook_id);
        Order::create([
            'ebook_id' => $product->ebook_id,
            'users_id' => $userId,
            'order_date' => now(),
        ]);


        return redirect('/user/cart')->with('success', 'Insert Product to Cart Success');
    }

    public function delete($id){
        // $cart = Cart::where('id', $id)->first();
        // $cart->delete();
        Order::where('id', $id)->delete();

        return back()->with('success', 'Delete Product from Cart Success');
    }

    public function submit()
    {
        //get all order data
        $order = Order::all();
        // delete all order data
        Order::truncate();
        // dd($order);
        return redirect('/user/cart')->with('success', 'Submit Order Success');
    }
}
