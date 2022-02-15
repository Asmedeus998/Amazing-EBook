@extends('layouts.app')

@section('content')
<div class="container">


<div class="row justify-content-evenly">
<table class="table table-bordered border-dark ">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($order as $item)
        <tr>
            {{-- {{dd($item)}} --}}
            <td>  {{$item->ebook->title}}</td>
            <td>
                <form action="{{url('/user/cart/delete',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

<form method="POST" action="{{ url('/user/cart') }}">
    @csrf
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn bg-warning p-3 border">
           Submit
        </button>
    </div>
</form>




@endsection
