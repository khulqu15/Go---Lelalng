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
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/illust/what.svg') }}" alt="Introduction" class="w-50">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="font-weight-bold">List Product</h2>
            </div>
        </div>
    </div>
@endsection
