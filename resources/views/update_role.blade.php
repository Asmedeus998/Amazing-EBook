@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-evenly">
        <select class="form-select" aria-label="Default select example">
            <option value="2">User</option>
            <option value="1">Admin</option>
          </select>
      </div>
    </div>
</div>
<form action="{{url('/updated_role')}}" method="GET">
    @csrf
    <button type="submit" class="btn btn-danger">Save</button>
</form>
@endsection
