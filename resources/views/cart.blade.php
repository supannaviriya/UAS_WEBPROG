@extends('layouts.main')

@section('content')

<table class="table table-bordered border-dark">

<thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($cart as $c )
    <tr>

    <td>
        {{$c->title}}
    </td>

    <td>
       <form action="cart/{{$c['id']}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="mt-2 btn-danger btn" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i>Delete</button>
        </form>
    </td>


    </tr>


    @endforeach


  </tbody>


  </table>

  <a href="submit"><button type="button" onclick="return confirm('Anda yakin ingin submit?');" class="fw-bold btn btn-warning me-2 mb-2">Submit</button></a>

  @endsection
