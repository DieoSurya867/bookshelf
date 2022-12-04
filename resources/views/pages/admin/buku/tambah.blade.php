@extends('layouts.admin')

@section('title')
    Tambah Data - Buku | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ url('admin/buku') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Buku /</span> Tambah Buku</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card mb-4">

                    <h5 class="card-header">Form Controls</h5>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Buku</label>
                            <input type="text"
                                class="form-control @error('judul') is-invalid
                          @enderror"
                                id="exampleFormControlInput1" name="judul" value="{{ old('judul') }}" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Sinopsis</span>
                            <textarea class="form-control @error('isi') is-invalid @enderror" aria-label="With textarea" name="isi"
                                value="{{ old('isi') }}">
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Penulis</label>
                            <input type="text"
                                class="form-control @error('penulis') is-invalid
                          @enderror"
                                id="exampleFormControlInput1" name="penulis" value="{{ old('penulis') }}" />
                        </div>

                        <div class="mb-3">
                            <label for="formDate" class="form-label">Tanggal Release</label>
                            <input class="form-control " type="date" id="formDate" name="tanggal" />
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">File Foto Produk</label>
                            <input class="form-control" type="file" id="formFile" name="cover" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Kategori Buku</label>
                            <select class="form-select @error('kategori_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="kategori_id">
                                <option selected>Pilih Nama Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" @selected(old('kategori_id') == $item->id)>
                                        {{ $item->namaKategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Role User</label>
                            <select class="form-select @error('status') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="status">
                                <option selected>Pilih Status Buku</option>

                                <option value=0>
                                    Draft</option>
                                <option value=1>
                                    Ditampilkan</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="mt-3 ms-1 btn btn-sm  btn-outline-primary">Tambah Data</button>
                        </div>
                    </div>
                </div>
    </form>
@endsection
