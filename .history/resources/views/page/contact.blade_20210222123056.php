@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 rounded border p-4">
                <div>
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <form action="{{ route('contact.us') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" required name="email" placeholder="Your Email Here" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" name="subject" placeholder="Your Subject Here" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection