@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid bg-success">
    <div class="row py-5">
        <div class="col-md-12 px-0 py-5 text-center">
            <h1 class="text-white font-weight-bold">Go-Lelang</h1>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="font-weight-bold">What is Go-Lelang ?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat nostrum numquam officia harum ut qui reprehenderit ex. Magnam quis nam quos ad voluptatibus! Facere, deserunt?</p>
            <button class="btn btn-success rounded px-5">Selengkapnya</button>
        </div>
        <div class="col-md-6 text-center py-2">
            <img src="{{ asset('img/illust/what.svg') }}" alt="Introduction" class="w-50">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 py-4">
            <h2 class="font-weight-bold">List Products</h2>
        </div>
        <div class="col-md-7 py-4">
            <div class="row">
                <form action="{{ route('home') }}" method="GET">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" value="{{ request()->get('name') == '' ? null : request()->get('name') }}" class="form-control" name="name" placeholder="Cari berdasarkan nama">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <select type="text" class="form-control" name="category">
                                    <option value="">{{ request()->get('category') == null ? 'Pilih Category' : request()->get('category') }}</option>
                                    @foreach ($categories as $ctr)
                                        <option value="{{ $ctr->id }}">{{ $ctr->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            @if(request()->get('name') == null && request()->get('category') == null)
                                <button type="submit" class="btn btn-success w-100"><i class="fas fa-paper-plane"></i></button>
                            @else
                                <a type="button" href="{{ route('home') }}" class="btn btn-light w-100"><i class="fas fa-redo"></i></a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($products as $product)
        <div class="col-lg-4 col-md-6">
            <div class="card w-100 position-relative">
                <div class="badge bg-success mb-2 position-absolute" style="right: 10px; top: 10px">{{ $product->category->name }}</div>
                <div class="image">
                    <img src="{{ asset('img/product/'.$product->picture) }}" class="image-fit-card" alt="{{ $product->name }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-0">{{ $product->name }}</h5>
                    <p class="text-sm textm-gray mb-2">Tutup pada : {{ \Carbon\Carbon::create($product->close)->isoFormat('dddd, D MMM Y') }}</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-success mt-1">Rp. {{ number_format($product->price) }},-</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right">
                                <a href="{{ route('product', ['id' => $product->id]) }}" class="btn btn-success d-inline-block px-3">More detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-4 mb-2 text-right">
            <div class="d-inline-block">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-success py-5">
    <div class="row">
        <div class="col-md-12 text-white text-center">
            <h2 class="font-weight-bold">Ayo Lelang di Go-Lelang</h2>
        </div>
    </div>
</div>
@endsection
