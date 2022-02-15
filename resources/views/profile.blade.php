@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{-- @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif --}}
            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                @csrf
                  <h1>Edit Profile</h1>
                <div class="row mb-3">
                  <label for="first_name"><b>First Name</b></label>
                  <input type="text" name= "first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" required>
                  @error('first_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="row mb-3">
                  <label for="middle_name"><b>Middle Name</b></label>
                  <input type="text" name= "middle_name" id="middle_name" class="form-control @error('middle_name') is-invalid @enderror" >
                  @error('middle_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>


                <div class="row mb-3">
                  <label for="last_name"><b>Last Name</b></label>
                  <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" required>
                  @error('last_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>

                <div class="row mb-3">
                  <label for="email"><b>Email</b></label>
                  <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>

                <div class="row mb-3">
                  <label for="password"><b>Password</b></label>
                  <input type="password" name="password" id="password" "form-control @error('password') is-invalid @enderror"required>

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>


                <div class="row mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender_id" id="flexRadioDefault1" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender_id" id="flexRadioDefault2" value="2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Female
                    </label>
                  </div>
                </div>


                <div class="row mb-3">

                    <select id="role" class="form-select @error('role') is-invalid @enderror" name="role_id"  required>
                        <option selected> </option>
                        <option value="2">User</option>
                        <option value="1">Admin</option>
                      </select>

                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                    <div class="row mb-3">
                        <label for="display_picture_link" class="col-md-4 col-form-label text-md-right">Display Picture</label>

                        <div class="col-md-6">
                             <input id="display_picture_link" type="file" name="display_picture_link" class="form-control @error('display_picture_link') is-invalid @enderror" placeholder="No file chosen" required>
                             @error('display_picture_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="container signin">
                  <a href="/login">Already have an account? Log in</a>
            </div>
            </form>



    </div>
@endsection
