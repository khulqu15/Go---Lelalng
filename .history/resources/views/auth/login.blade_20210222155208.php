@extends('layout.auth')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border rounded p-5">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email Here">
            </div>
        </div>
    </div>
</div>
@endsection
