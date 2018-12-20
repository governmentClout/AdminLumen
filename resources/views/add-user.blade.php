
@extends('partials.app')
@section('title', 'Login')

@section('content')
    <section class="d-flex auth-wrapper">
        <div class="m-auto col-md-5">
            <div class="auth-header text-center py-3">
                <h2>Create Admin Account</h2>
            </div>
            <div class="auth-form">
                <form method="post" action="{{route('create')}}">
                    <div class="row">
                        <div class="col form-group">
                            <label for="firstName">First name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col form-group">
                            <label for="lastName">Last name</label>
                            <input name="lastName" type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <div class="input-group">
                            <input name="email" type="email" class="form-control" required placeholder="Email address">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="material-icons">email</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control" required placeholder="Passsword">
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