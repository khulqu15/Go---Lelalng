@extends('layout.app')

@section('title', Auth::user()->name)

@section('content')
<div class="container-fluid bg-success position-relative py-5">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="avatar-profile position-absolute shadow" style="bottom: -50px; width: 100px; height: 100px; border-radius: 100px;">
                    <img src="{{ asset('img/user/'.Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}" class="image-fit-card">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
