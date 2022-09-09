@extends('backend.dashboard_coba.layout.main')


@section('container')
    <div class="page-content">

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Produk</li>
            </ol>
        </nav>

        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Daftar Produk</h6>
                        <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                            data-bs-target="#tambahkategori">
                            <i data-feather="plus"></i>Tambah Kategori
                        </button>
                        <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                            data-bs-target="#tambahproduk">
                            <i data-feather="plus"></i>Tambah Produk
                        </button>
                        <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                            data-bs-target="#tambahpromo">
                            <i data-feather="plus"></i>Tambah Promo
                        </button>

                        <div class="modal fade" id="tambahkategori" tabindex="-1" aria-labelledby="tambahkategoriLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahkategoriLabel">Form Tambah Kategori
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/administrator/category" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" name="name" required autofocus value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        </form>

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0 mt-3">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Category Name</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $category->name }}</td>
                                                            <td>
                                                                <a href="/administrator/categories/{{ $category->name }}/edit"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit" class="badge bg-warning">
                                                                    <span data-feather="edit"></span>
                                                                </a>
                                                                <form
                                                                    action="/administrator/categories/{{ $category->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="badge bg-danger border-0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Delete"
                                                                        onclick="return confirm('Are you sure ?')">
                                                                        <span data-feather="x-circle"></span></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="tambahproduk" tabindex="-1" aria-labelledby="tambahprodukLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahprodukLabel">Form Tambah Produk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="/administrator/product" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" name="name" required autofocus value="{{ old('name') }}"
                                                    placeholder="Nama">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="row mb-3">
                                                <label for="harga" class="form-label">Harga</label>
                                                <input type="number" class="form-control" name="price" placeholder="IDR"
                                                    value="{{ old('price') }}" required>
                                                @error('price')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="row mb-3">
                                                <label class="form-label">Promo</label>
                                                <input type="number" class="form-control" name="promo" placeholder="IDR"
                                                    value="{{ old('promo') }}">
                                                @error('promo')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="category" class="form-label">Kategori</label>
                                                <select class="form-select" name="category_id">
                                                    <option selected="" disabled="">
                                                        -- Pilih Kategori --
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        @if (old('category_id') == $category->id)
                                                            <option value="{{ $category->id }}" selected>
                                                                {{ $category->name }}</option>
                                                        @else
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="description_product" class="form-label">Deskripsi</label>

                                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="description_product" name="description_product" required autofocus
                                                    value="{{ old('description_product') }}" placeholder="Deskripsi">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="row mb-3">
                                                <label>Suhu</label>
                                                @error('suhu')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                                <input type="text" class="form-control" name="suhu"
                                                    placeholder="Ex. Hot,Cold" value="{{ old('suhu') }}" required>
                                            </div>

                                            <div class="row mb-3">
                                                <label>Ukuran</label>
                                                @error('ukuran')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                                <input type="text" class="form-control" name="ukuran"
                                                    placeholder="Small,Medium,Large" value="{{ old('ukuran') }}"
                                                    required>
                                            </div>


                                            <div class="row mb-3">
                                                <label>Es</label>
                                                @error('es')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                                <input type="text" class="form-control" name="es"
                                                    placeholder="Ex. Normal,Less,No Ice" value="{{ old('es') }}"
                                                    required>
                                            </div>

                                            <div class="row mb-3">
                                                <label>Gula</label>
                                                @error('gula')
                                                    <small class="text-danger d-block">{{ $message }}</small>
                                                @enderror
                                                <input type="text" class="form-control" name="gula"
                                                    placeholder="Ex. Normal,Less,No Sugar" value="{{ old('gula') }}"
                                                    required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image Product</label>
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                                    id="image" name="image" onchange="previewImage()">
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Detail Image Product</label>
                                                <img class="img-detail-preview img-fluid mb-3 col-sm-5">
                                                <input class="form-control @error('detail_image') is-invalid @enderror" type="file"
                                                    id="detail_image" name="detail_image" onchange="previewDetailImage()">
                                                @error('detail_image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary">Create Product</button>
                                            <!-- <button class="btn btn-secondary">Cancel</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="tambahpromo" tabindex="-1" aria-labelledby="tambahpromoLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahpromoLabel">Form Tambah Promo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="forms-sample">
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Nama
                                                    Produk</label>
                                                <select class="form-select" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">-- Pilih Produk --
                                                    </option>
                                                    <option>coffee Late</option>
                                                    <option>Green Tea</option>
                                                    <option>Mojito</option>

                                                </select>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="exampleInputEmail2" class="form-label">Harga
                                                    Awal</label>

                                                <input type="text" class="form-control" id="exampleInputEmail2"
                                                    placeholder="Harga" value="12000" disabled>

                                            </div>

                                            <div class="row mb-3">
                                                <label for="exampleInputPassword2" class="form-label">Harga
                                                    Promo</label>

                                                <input type="text" class="form-control" id="exampleInputPassword2"
                                                    placeholder="Harga Promo">

                                            </div>


                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                            <!-- <button class="btn btn-secondary">Cancel</button> -->
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Suhu</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Es</th>
                                        <th scope="col">Gula</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Promo</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->suhu }}</td>
                                            <td>{{ $product->ukuran }}</td>
                                            <td>{{ $product->es }}</td>
                                            <td>{{ $product->gula }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->promo }}</td>
                                            <td><img src="{{ asset('storage/' . $product->image) }}"
                                                    class="img-fluid" alt=""> </td>
                                            <td>
                                                <a href="/administrator/product/{{ $product->id }}/edit"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    class="badge bg-warning">
                                                    <span data-feather="edit"></span></a>
                                                <form action="/administrator/product/{{ $product->id }}" method="product"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"
                                                        onclick="return confirm('Are you sure ?')">
                                                        <span data-feather="x-circle"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Produk</h1>
    </div> --}}



    <div class="table-responsive col-lg-8">
        <a href="/administrator/product/create" class="btn btn-primary mb-3">Create New product</a>
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
                    <th scope="col">Harga</th>
                    <th scope="col">Promo</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->suhu }}</td>
                        <td>{{ $product->es }}</td>
                        <td>{{ $product->gula }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->promo }}</td>
                        <td>
                            <a href="/administrator/product/{{ $product->id }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span></a>
                            <form action="/administrator/product/{{ $product->id }}" method="product"
                                class="d-inline">
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
        function previewDetailImage() {
            const image = document.querySelector('#detail_image');
            const imgPreview1 = document.querySelector('.img-detail-preview');

            imgPreview1.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview1.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
