@extends('layouts.perpus')

@section('content')
    <section class="arrivals" id="arrivals">

        <h1 class="heading"><span> Contoh Buku Action</span></h1>
        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">
                @forelse($buku1 as $action)
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="{{ asset('storage/' . $action->cover) }}" alt="" />
                        </div>
                        <div class="content">
                            <h3>{{ $action->judul }}</h3>
                        </div>
                    </a>
                @empty
                    <div class="col-3 mb-5">
                        <h5>Contoh Produk Sedang Kosong</h5>
                    </div>
                @endforelse
            </div>
        </div>



    </section>

    <section class="arrivals" id="buku2">
        <h1 class="heading"><span> Contoh Buku Action</span></h1>
        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">
                @forelse($buku2 as $buku2)
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="{{ asset('storage/' . $buku2->cover) }}" alt="" />
                        </div>
                        <div class="content">
                            <h3>{{ $buku2->judul }}</h3>
                        </div>
                    </a>
                @empty
                    <div class="col-3 mb-5">
                        <h5>Contoh Produk Sedang Kosong</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
