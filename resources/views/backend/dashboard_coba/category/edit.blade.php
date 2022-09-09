@extends('backend.dashboard_coba.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category</h1>
  </div>
        <div class="col-lg-8">
                {{-- Body Input --}}
                <form action="/administrator/category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" required autofocus value="{{ old('name', $category->name) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>

<script>
    const name = document.querySelector('#name');

    title.addEventListener('change', function(){
        fetch('/administrator/category/id=' + name.value)
        .then(response => response.json())
        .then(data => name.value = data.name)
    });

    document.addEventListener('tric-file-accept', function(e){
        e.preventDefault();
    })

</script>
@endsection
