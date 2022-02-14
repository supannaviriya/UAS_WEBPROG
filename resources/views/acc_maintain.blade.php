@extends('layouts.main')

@section('content')

<table class="table table-bordered border-dark">

<thead>
    <tr>
      <th scope="col">Account</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  <tbody>


                @foreach ($data as $d)
                <tr>

                <td>
                    {{$d->first_name}} {{$d->id}} - {{$d->role->role_desc}}
                </td>
                <td>
                    <a href="update_role/{{$d['id']}}">Update Role</a>

                    <form action="acc_maintain/{{$d['id']}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="mt-2 btn-danger btn" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i>Delete</button>
                    </form>
                </td>

                </tr>

                @endforeach
  </tbody>
</table>

@endsection
