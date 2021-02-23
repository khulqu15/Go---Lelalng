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
                        <div class="form-group py-2">
                            <label for="name">Nama</label>
                            <input type="text" required name="name" placeholder="Your Name Here" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="email">Email</label>
                            <input type="email" required name="email" placeholder="Your Email Here" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="subject">Subjek</label>
                            <input type="text" name="subject" placeholder="Your Subject Here" class="form-control">
                        </div>
                        <div class="form-group py-2">
                            <label for="subject">Isi</label>
                            <textarea rows="4" type="text" name="subject" placeholder="Your Text Here" class="form-control"></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-success px-5">Kirim <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
