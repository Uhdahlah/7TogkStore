@extends('app.app')
@section('title')
    login - 7Togk'Store
@endsection
@section('content')
    @include('app.header.header')
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    @csrf
                    <h2 class="text-info">LOGIN</h2>
                    <p>Masukan Gamertag</p>
                </div>
                <form action="/login" method="post">
                    <div class="form-group"><label for="email">Gamertag</label><input class="form-control item" name="Gamertag" value="{{ old('Gamertag') }}" required autofocus></div>
                    <div class="form-group">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                        @endif
                    </div><button class="btn btn-primary btn-block" type="submit">Log In</button></form>
            </div>
        </section>
    </main>
@endsection