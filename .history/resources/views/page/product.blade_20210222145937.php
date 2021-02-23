@extends('layout.app')

@section('title', $product->name)

@section('content')
<div class="container-fluid position-relative bg-success py-5">
    <div class="row py-5 px-0">
        <div class="col-md-12 px-0 py-5">
            <img src="{{ asset('img/product/'.$product->picture) }}" class="w-100 h-100 position-absolute image-fit-card" style="top: 0" alt="">
        </div>
    </div>
</div>
@endsection
