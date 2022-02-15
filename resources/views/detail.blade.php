@extends('layouts.app')

@section('content')
@foreach($ebook as $item)
    <div class="card-body">
        <h1 class="card-text">Title: {{$item->title}}</h1>
        <h5 class="card-title">Author: {{$item->author}}</h5>
        <p class="card-text">description: {{$item->description}}</p>
    </div>
@endforeach

<div class="container ">
    <div class="row justify-content-evenly">
        <div class="col-4">
          {{-- One of two columns --}}
        </div>
        <div class="col-1 d-flex justify-content-center  " >
            @if(auth()->user()->role_id == 1)
            {{-- admin --}}
            @foreach($ebook as $item)
                <form class="ms-4" method="POST" action="{{ url('/admin/cart/add', $item->ebook_id) }}">
                    @csrf
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn bg-warning p-3 border">
                               Rent
                            </button>
                        </div>
                    </div>
                </form>
            @endforeach
            @endif

            @if(auth()->user()->role_id == 2)
            {{-- user --}}
            @foreach($ebook as $item)
                <form class="ms-4" method="POST" action="{{ url('/user/cart/add', $item->ebook_id) }}">
                    @csrf
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn bg-warning p-3 border">
                                Rent
                             </button>
                        </div>
                    </div>
                </form>
            @endforeach
            @endif

        </div>
      </div>
    </div>
</div>

@endsection
