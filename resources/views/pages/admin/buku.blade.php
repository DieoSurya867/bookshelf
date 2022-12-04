@extends('layouts.admin')


@section('title')
    Dashboard - Buku | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Buku</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Buku</h5>
                <div class="table-responsive text-nowrap">
                    <a href="{{ route('buku.create') }}" class="ms-4 mb-4 btn btn-sm  btn-outline-primary">Tambah
                        Buku</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Isi</th>
                                <th>Penulis</th>
                                <th>Total_Pembaca</th>
                                <th>Tgl Rilis</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th>Tgl Post</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($buku as $item)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $loop->iteration }}</strong>
                                    </td>
                                    <td>{{ $item['judul'] }}</td>
                                    <td><img src="{{ asset('storage/' . $item->cover) }}" alt="" width="100px"
                                            height="100px">
                                    </td>
                                    <td>{{ $item['isi'] }}</td>
                                    <td>{{ $item['penulis'] }}</td>
                                    <td>{{ $item['total_pembaca'] }}</td>
                                    <td>{{ $item['tanggal'] }}</td>
                                    <td>{{ $item->status == 0 ? 'Draft' : 'Publish' }}</td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item->kategori->namaKategori }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('buku.edit', $item->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>

                                                <a class="dropdown-item" href="{{ route('deletebuku', $item->id) }}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <hr class="my-5" />
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
