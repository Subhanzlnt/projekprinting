@extends('backend.dashboard_coba.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5"
    enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
        name="name" required autofocus value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="topping" class="form-tabel">Topping</label>
        <select class="form-select" name="topping_id">
            @foreach($toppings as $topping)
            @if(old('topping_id') == $topping->id)
               <option value="{{ $topping->id }}" selected>{{ $topping->id }}</option>
               @else
               <option value="{{ $topping->id }}">{{ $topping->id }}</option>
               @endif
            @endforeach
        </select>
      </div>
      <div class="form-group">
          <label>Suhu</label>
          @error('suhu')
          <small class="text-danger d-block">{{$message}}</small>
          @enderror
          <input type="text" class="form-control" name="ssuhu" placeholder="Ex. Hot,Cold"
              value="{{old('size')}}" required>
      </div>
      <div class="form-group">
          <label>Ukuran</label>
          @error('ukuran')
          <small class="text-danger d-block">{{$message}}</small>
          @enderror
          <input type="text" class="form-control" name="ukuran" placeholder="Small,Medium,Large"
              value="{{old('ukuran')}}" required>
      </div>
      <div class="form-group">
          <label>Es</label>
          @error('es')
          <small class="text-danger d-block">{{$message}}</small>
          @enderror
          <input type="text" class="form-control" name="es" placeholder="Ex. Normal,Less,No Ice"
              value="{{old('es')}}" required>
      </div>
      <div class="form-group">
          <label>Gula</label>
          @error('gula')
          <small class="text-danger d-block">{{$message}}</small>
          @enderror
          <input type="text" class="form-control" name="gula" placeholder="Ex. Normal,Less,No Sugar"
              value="{{old('gula')}}" required>
      </div>
      <div class="mb-3">
          <label for="category" class="form-tabel">topping</label>
          <select class="form-select" name="topping_id">
              @foreach($categories as $topping)
              @if(old('topping_id') == $topping->id)
                 <option value="{{ $topping->id }}" selected>{{ $topping->name }}</option>
                 @else
                 <option value="{{ $topping->id }}">{{ $topping->name }}</option>
                 @endif
              @endforeach
          </select>
        </div>

      <div class="form-group">
          <label>Harga</label>
          @error('price')
          <small class="text-danger d-block">{{$message}}</small>
          @enderror
          <input type="number" class="form-control" name="price" placeholder="IDR"
              value="{{old('price')}}" required>
      </div>
      <div class="form-group">
          <label>Promo</label>
          @error('promo')
          <small class="text-danger d-block">{{$message}}</small>
          @enderror
          <input type="number" class="form-control" name="promo" placeholder="IDR"
              value="{{old('promo')}}" required>
      </div>

      <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
          name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
  </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('tric-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    }
</script>
@endsection
