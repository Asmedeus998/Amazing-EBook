@extends('layouts.app')

@section('content')
<div class="container">


<div class="row justify-content-evenly">
    <table class="table table-bordered border-dark ">
        <thead>
        <tr>
            <th scope="col">Account</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                {{-- {{dd($item->role_id)}} --}}
                <td>  {{$item->roles->role_desc}}</td>
                {{-- <td>  </td> --}}
                <td>
                    <a href="/admin/update_role/{{ $item->role_id}}"> update role</a>
                    <form action="{{url('/admin/account_maintenance', $item->id)}}" method="POST">
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
    </div>
@endsection
