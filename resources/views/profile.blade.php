@extends('layouts.main')

@section('content')

<div class="row justify-content-center">

  <div class="col-md-5">

    <main class="form-regis">

    <h1 class="h3 mb-3 fw-normal text-center mt-3">Update your data here!</h1>
    <form action="/profile" method="post" enctype="multipart/form-data">
      @csrf

      <input type="hidden" name="id" value="{{$data['id']}}">

      <div class="form-floating mb-2">
        <input type="text" name="first_name" class="form-control rounded-top @error('first_name') is-invalid @enderror" id="first_name" placeholder="first_name" required value="{{$data['first_name']}}">
        <label for="first_name">First Name</label>
        @error('first_name')
        <div class="invalid-feedback">{{$message}}
        </div>
        @enderror
      </div>

      <div class="form-floating mb-2">
        <input type="text" name="middle_name" class="form-control rounded-top @error('middle_name') is-invalid @enderror" id="middle_name" placeholder="middle_name" required value="{{$data['middle_name']}}">
        <label for="middle_name">Middle Name</label>
        @error('middle_name')
        <div class="invalid-feedback">{{$message}}
        </div>
        @enderror
      </div>

      <div class="form-floating mb-2">
        <input type="text" name="last_name" class="form-control rounded-top @error('name') is-invalid @enderror" id="last_name" placeholder="last_name" required value="{{$data['last_name']}}">
        <label for="last_name">Last Name</label>
        @error('name')
        <div class="invalid-feedback">{{$message}}
        </div>
        @enderror
      </div>

      <div class="form-floating mb-2">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{$data['email']}}">
        <label for="email">Email address</label>
        @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>

      <div class="form-floating mb-2">
        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"   id="password" placeholder="Password">
        <label for="password">Password</label>

        @error('password')<div class="invalid-feedback">{{$message}}</div>@enderror
      </div>

      <div class="form-floating me-2">

      <div class="row">

      <label>Gender:</label>

      <div class="col">

      <label><input type="checkbox" name="gender_id" id="gender_id" value="{{$data['gender_id']}}" value="1">Male</label>

      <label><input type="checkbox" name="gender_id" id="gender_id" value="{{$data['gender_id']}}" value="2">Female</label>

      @error('gender_desc')
        <div class="invalid-feedback">{{$message}}
        </div>
        @enderror
      </div>
      </div>
      </div>

      <div class="col-sm-12 mt-2">

      <label for="role">Role</label>

    <select class="form-control @error('role_desc') is-invalid @enderror" name="role_id" id="role_id">
    <option value="1">User</option>
    <option value="2">Admin</option>
    </select>

    </div>
    <label for="display_picture_link" class="form-label">Display picture:</label>

    <div class="form-floating me-2">
        <input class="form-control" type="file" name="display_picture_link" id="display_picture_link">

        <input type="hidden" name="oldImage" value="{{$data['display_picture_link']}}">
        <div style="max-height: 200px; overflow:hidden;">

        <img src="{{ asset('storage/'.$data->display_picture_link) }}" class="card-img-top">

        </div>
        @error('display_picture_link')
        <div class="invalid-feedback">{{$message}}
        </div>
        @enderror
    </div>
    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Save</button>
    </form>
    </main>

  </div>
</div>




@endsection
