@extends('backend.dashboard_coba.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Product</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/administrator/product" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required
                    autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description_product" class="form-label">Description product</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="description_product"
                    name="description_product" required autofocus value="{{ old('description_product') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Suhu</label>
                @error('suhu')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
                <input type="text" class="form-control" name="suhu" placeholder="Ex. Hot,Cold" value="{{ old('suhu') }}"
                    required>
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                @error('ukuran')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
                <input type="text" class="form-control" name="ukuran" placeholder="Small,Medium,Large"
                    value="{{ old('ukuran') }}" required>
            </div>
            <div class="form-group">
                <label>Es</label>
                @error('es')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
                <input type="text" class="form-control" name="es" placeholder="Ex. Normal,Less,No Ice"
                    value="{{ old('es') }}" required>
            </div>
            <div class="form-group">
                <label>Gula</label>
                @error('gula')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
                <input type="text" class="form-control" name="gula" placeholder="Ex. Normal,Less,No Sugar"
                    value="{{ old('gula') }}" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-tabel">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Harga</label>
                @error('price')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
                <input type="number" class="form-control" name="price" placeholder="IDR" value="{{ old('price') }}"
                    required>
            </div>
            <div class="form-group">
                <label>Promo</label>
                @error('promo')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
                <input type="number" class="form-control" name="promo" placeholder="IDR" value="{{ old('promo') }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image Product</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                    onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>

    <script>
        const name = document.querySelector('#name');


        name.addEventListener('change', function() {
            fetch('/administrator/product/id' + name.value)
                .then(response => response.json())
                .then(data => name.value = data.name)
        });

        document.addEventListener('tric-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
