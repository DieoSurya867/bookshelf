@extends('layouts.admin')

@section('title')
    Edit Produk - Admin | Sneat - Bootstrap 5 HTML Admin Template - Pro
@endsection

@section('content')
    <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Barang /</span> Edit Produk</h4>
            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card mb-4">

                    <h5 class="card-header">Form Edit</h5>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Nama Produk</label>
                            <input class="form-control @error('judul') is-invalid
                          @enderror"
                                type="text" id="exampleFormControlReadOnlyInput1" name="judul"
                                value="{{ $buku->judul }}" />
                        </div>

                        <div class="input-group">
                            <span class="input-group-text">Sinopsis</span>
                            <textarea class="form-control" aria-label="With textarea" name="isi">{{ $buku->isi }}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Penulis</label>
                            <input class="form-control @error('penulis') is-invalid
                          @enderror"
                                type="text" id="exampleFormControlReadOnlyInput1" name="penulis"
                                value="{{ $buku->penulis }}" />
                        </div>

                        <div class="mb-3">
                            <label for="formDate" class="form-label">Tanggal Release</label>
                            <input class="form-control " type="date" id="formDate" name="tanggal"
                                value="{{ $buku->tanggal }}" />
                        </div>
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <img class="img-fluid d-flex mx-auto my-4" src="{{ asset('storage/' . $buku->cover) }}"
                                        alt="Card image Buku" />
                                </div>
                            </div>
                            {{-- <img src="{{ asset('storage/' . $galeri->photos) }}" alt=""> --}}
                            <label for="formFile" class="form-label">Ganti Foto Produk</label>
                            <input class="form-control" type="file" id="formFile" name="cover" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Kategori Barang</label>
                            <select class="form-select @error('kategori_id') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="kategori_id">
                                <option selected>Pilih Nama Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $buku->kategori_id ? 'selected' : '' }}>
                                        {{ $item->namaKategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Pilih Status Buku</label>
                            <select class="form-select @error('status') is-invalid
                          @enderror"
                                id="exampleFormControlSelect1" aria-label="Default select example" name="status">
                                <option selected>Pilih Nama Role</option>
                                <option value=0 {{ $buku->status == 0 ? 'selected' : '' }}>Draf
                                </option>
                                <option value=1 {{ $buku->status == 1 ? 'selected' : '' }}>Ditampilkan
                                </option>
                            </select>
                        </div>
                        <div>
                            <a href="/admin/buku" class="mt-1 btn btn-danger">Batal</a>
                            <button type="submit" class="mt-1 ms-1 btn btn-sm  btn-outline-primary">Edit produk</button>
                        </div>
                    </div>
                </div>
    </form>
    </div>
    </div>
@endsection
