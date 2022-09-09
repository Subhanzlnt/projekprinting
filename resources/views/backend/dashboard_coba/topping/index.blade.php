@extends('backend.dashboard_coba.layout.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List topping</h1>
  </div>


@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
    {{  session('success') }}
    </div>
@endif
  <div class="table-responsive col-lg-8">
      <a href="/administrator/topping/create" class="btn btn-primary mb-3">Create New topping</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Harga</th>


        </tr>
      </thead>
      <tbody>
          @foreach ($toppings as $topping)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $topping->name}}</td>
            <td>{{ $topping->price}}</td>
            <td>
                <a href="/administrator/topping/{{$topping->id}}/edit" class="badge bg-warning">
                <span data-feather="edit"></span></a>
                <form action="/administrator/topping/{{$topping->id}}" method="product" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')">
                <span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection
