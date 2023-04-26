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
                    <h2 class="text-info">Log In</h2>
                    <p>masukan gamertag dan pin</p>
                </div>
                <form action="post" href="/login">
                    <div class="form-group"><label for="email">Gamertag</label><input class="form-control item" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Pin</label><input class="form-control" type="password" id="password"></div>
                    <div class="form-group">
                    </div><button class="btn btn-primary btn-block" type="submit">Log In</button></form>
            </div>
        </section>
    </main>
@endsection