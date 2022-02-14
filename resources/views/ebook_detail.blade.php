@extends('layouts.main')

@section('content')

<main>
<div class="container align-items-center">

          <div class="col align-items-center">

          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-3 shadow-sm h-md-50">

              <div class="col p-4 d-flex flex-column position-static">

                      <h5>E book detail</h5>
                      <label for="description">Title:</label>
                      <p class="form-label mt-2 mb-2">Title {{ $data->title }}</p>

                      <label for="description">Author:</label>
                      <p class="form-label mt-2 mb-2">Title {{ $data->author }}</p>

                      <label for="description">Description:</label>
                      <div class="border rounded p-2 mt-2 mb-2">
                        <p class="form-label">{{ $data->description }}</p>
                      </div>

                      <div class="col-md-3">
                      <a class="btn btn-warning mt-2" href="/cart/{{$data->id}}">Rent</a>
                      </div>
                      <!-- <form method="post" action="/ebook_detail/{{$data['id']}}" >
                        @csrf

                      <button type="submit" class="btn btn-warning mt-2"><i class="fa fa-shopping-cart"></i>Rent</button> -->

             </div>
          </div>
        </div>

      </div>
    </main>

    @endsection
