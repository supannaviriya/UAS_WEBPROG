@extends('layouts.main')

@section('content')

<table class="table table-bordered border-dark">

<thead>
    <tr>
      <th scope="col">Author</th>
      <th scope="col">Title</th>

    </tr>
  </thead>

  <tbody>


                @foreach ($data as $d)
                <tr>

                <td>
                    Author {{$d->id}}
                </td>
                <td>
                    <a href="/ebook_detail/{{$d['id']}}" >{{$d->title}}</a>
                </td>

                </tr>

                @endforeach
  </tbody>
</table>

@endsection
