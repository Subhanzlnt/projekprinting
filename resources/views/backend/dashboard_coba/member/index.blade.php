@extends('backend.dashboard_coba.layout.main')


@section('container')
    <div class="page-content">
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-6" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Member</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Member</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
                            data-bs-target="#tambahuser">
                            <i data-feather="plus"></i>Tambah User
                        </button>
                        <div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="tambahuserLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahuserLabel">Form Tambah User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="forms-sample">
                                            <div class="row mb-3">
                                                <label for="exampleInputUsername2"
                                                    class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputUsername2"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="exampleInputEmail2"
                                                    class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                                        autocomplete="off" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="exampleInputPassword2"
                                                    class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="exampleInputPassword2"
                                                        autocomplete="off" placeholder="Password">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                            <button class="btn btn-secondary">Cancel</button>
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
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td>
                                                <a href="/administrator/member/{{ $member->id }}/edit"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                                    class="badge bg-warning">
                                                    <span data-feather="edit"></span></a>
                                                <form action="/administrator/member/{{ $member->id }}" method="post"
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
        <h1 class="h2">All Member</h1>
    </div> --}}

    <div class="table-responsive col-lg-6">
        <a href="/administrator/member/create" class="btn btn-primary mb-3">Create New Member</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>
                            <a href="/administrator/member/{{ $member->id }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span></a>
                            <form action="/administrator/member/{{ $member->id }}" method="post" class="d-inline">
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
