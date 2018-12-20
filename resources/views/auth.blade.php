
@extends('partials.app')
@section('title', 'Login')

@section('content')
    <section class="d-flex auth-wrapper">
        <div class="m-auto col-md-5">
            <div class="auth-header text-center py-3">
                <h2>Sign In</h2>
            </div>
            <div class="auth-form">
                <form method="post" action="{{route('login')}}">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <div class="input-group">
                            <input type="email" class="form-control" required placeholder="Email address">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="material-icons">email</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" required placeholder="Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="material-icons">lock</i></span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-gclout-blue">Sign In</button>
                </form>
            </div>
        </div>
    </section>
@endsection