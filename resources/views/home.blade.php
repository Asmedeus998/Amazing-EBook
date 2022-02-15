@extends('layouts.app')

@section('content')


{{-- {{dd(Auth::user()->role_id)}} --}}
@guest
<div class = "circle-center">
    <h2>
        Find and Rent Your E-Book Here!
    </h2>
</div>
    @else
        @if(auth()->user()->role_id == 2)
            <div class="container">
                <div class="row justify-content-md-center bg-warning">
                    <div class="col b-2">
                        <a class="text-black d-flex justify-content-center" href="/">Home</a>
                    </div>
                    <div class="col b-2">
                        <a class="text-black d-flex justify-content-center" href="/user/cart">Cart</a>
                    </div>
                    <div class="col b-2">
                        <a class="text-black d-flex justify-content-center" href="/user/profile">Profile</a>
                    </div>
                </div>
            </div>
            <div class="container md-auto d-flex justify-content-md-center">
                <table class="table table-bordered border-dark">
                    <thead>
                      <tr>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ebooks as $item)
                        <tr>
                            {{-- {{dd($item)}} --}}
                            <td>  {{$item->author}}</td>
                            <td>
                                <a href="/user/detail/{{$item->ebook_id}}"> {{$item->title}} </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        @endif
        @if(auth()->user()->role_id == 1)
            <div class="container">
                <div class="row justify-content-md-center bg-warning">
                <div class="row">
                    <div class="col">
                    <a class="text-black" href="/">Home</a>
                    </div>
                    <div class="col ">
                        <a class="text-black d-flex justify-content-center" href="/admin/cart">Cart</a>
                    </div>
                    <div class="col ">
                        <a class="text-black d-flex justify-content-center" href="/admin/profile">Profile</a>
                    </div>
                    <div class="col">
                        <a class="text-black d-flex justify-content-center" href="/admin/account_maintenance">Account Maintenance</a>
                    </div>
                </div>
            </div>
                <table class="table table-bordered border-dark ">
                    <thead>
                    <tr>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($ebooks as $item)
                        <tr>
                            {{-- {{dd($item)}} --}}
                            <td>  {{$item->author}}</td>
                            <td>
                                <a href="/user/detail/{{$item->ebook_id}}"> {{$item->title}} </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


@endguest


@endsection
