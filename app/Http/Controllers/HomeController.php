<?php

namespace App\Http\Controllers;

use App\Models\EBook;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // get all ebook data
        $ebooks = EBook::all();
        // dd($ebooks);
        return view('home', ['ebooks' => $ebooks]);
    }



    }

