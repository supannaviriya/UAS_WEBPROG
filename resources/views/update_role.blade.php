@extends('layouts.main')

@section('content')

<form action="/update_role" method="post">
@csrf

<input type="hidden" name="id" value="{{$data['id']}}">


<h5>{{$data->first_name}} {{$data->id}}</h5>

<div class="col-sm-2 mt-2">

<label for="role">Role:</label>

<select class="form-control @error('role_desc') is-invalid @enderror" name="role_id" id="role_id">
<option value="1">User</option>
<option value="2">Admin</option>
</select>

</div>

<button class="w-30 btn btn-lg btn-warning mt-3 mb-2" type="submit">Save</button>
</form>

@endsection
