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
            <div class="col-md-12 py-4">
                <h2 class="font-weight-bold">List Products</h2>
            </div>
            <div class="col-md-4">
                <div class="card w-100">
                    <img src="{{ asset('img/product/1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
