@extends('layout.auth')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border rounded p-5">
            <h2>Login</h2>
            <div class="form-group py-2">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email Here">
            </div>
            <div class="form-group py-2">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Your Password Here">
            </div>
            <div class="text-right">
                <button class="btn btn-success px-5 py-2" type="submit">Masuk</button>
            </div>
        </div>
    </div>
</div>
@endsection
