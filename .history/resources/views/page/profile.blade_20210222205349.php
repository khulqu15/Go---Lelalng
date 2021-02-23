@extends('layout.app')

@section('title', Auth::user()->name)

@section('content')
<div class="container-fluid bg-success position-relative pt-5">
    <div class="container position-relative pb-5">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="avatar-profile position-absolute shadow" style="bottom: -60px; width: 120px; height: 120px; border-radius: 120px;">
                    <img src="{{ asset('img/user/'.Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}" class="image-fit-card">
                </div>
                <h1 class="text-white position-absolute" style="bottom: 0px; left: 150px">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p class="me-5">{{ Auth::user()->level }}</p>
        </div>
    </div>
</div>
@endsection
