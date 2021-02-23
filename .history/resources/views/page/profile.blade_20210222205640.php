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
<div class="container position-relative">
    <div class="row">
        <div class="col-md-12">
            <h5 class="position-absolute" style="left: 150px; top: 10px">{{ ucfirst(Auth::user()->level) }}</h5>
        </div>
    </div>
</div>
@endsection
