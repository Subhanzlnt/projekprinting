@extends('backend.dashboard_coba.layout.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Produk</h1>
  </div>


@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
    {{  session('success') }}
    </div>
@endif
  <div class="table-responsive col-lg-8">
      <a href="/administrator/produk/create" class="btn btn-primary mb-3">Create New product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Suhu</th>
          <th scope="col">Ukuran</th>
          <th scope="col">Es</th>
          <th scope="col">Gula</th>
          <th scope="col">Topping</th>
          <th scope="col">Harga</th>
          <th scope="col">Promo</th>

        </tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->name}}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->suhu}}</td>
            <td>{{ $product->es}}</td>
            <td>{{ $product->gula}}</td>
            {{-- <td>{{ $product->topping->topping}}</td> --}}
            <td>{{ $product->harga }}</td>
            <td>{{ $product->promo }}</td>
            <td>
                <a href="/administrator/product/{{ $product->name}}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/administrator/product/{{$product->name}}/edit" class="badge bg-warning">
                <span data-feather="edit"></span></a>
                <form action="/administrator/product/{{$product->name}}" method="product" class="d-inline">
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
