@extends('layout.app')

@section('title', $product->name)

@section('content')
<div class="container-fluid position-relative bg-success py-5">
    <div class="row py-5 px-0">
        <div class="col-md-12 px-0 py-5">
            <img src="{{ asset('img/product/'.$product->picture) }}" class="w-100 h-100 position-absolute image-fit-card" style="top: 0; opacity: .8" alt="">
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <div class="alert alert-danger fade show d-inline-block py-2 px-4" role="alert">
                <strong>Closed at : </strong> {{ \Carbon\Carbon::create($product->close)->isoFormat('dddd, D MMM Y') }}
            </div>
            <div>
                <div class="alert alert-success fade show d-inline-block py-2 px-4" role="alert">
                    <strong>Price Start : </strong> Rp {{ number_format($product->price) }},-
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h5 class="text-success">Description : </h5>
            <p>{{ $product->description }}</p>
            @if (Auth::check())
                @if ()
                <div class="row">
                    <div class="col-9">
                        <input type="number" value={{ $product->price + 10000 }} required class="form-control">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-success w-100"><i class="fas fa-money-bill"></i></button>
                    </div>
                </div>
                @else
                <div class="alert alert-danger fade show d-inline-block py-2 px-4" role="alert">
                    <strong>Galat : </strong> Anda bukan user
                </div>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
