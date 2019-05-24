@extends('backend.Admin.Layout.form')


@section('form-content')

    <div class="content-wrapper"><!--Login Page Starts-->
        <section id="login">
            <div class="container-fluid">
                <div class="row full-height-vh">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="card gradient-indigo-purple text-center width-400">
                            <div class="card-img overlap">
                                <img alt="element 06" class="mb-1" src="/evre8/assets/img/portrait/avatars/avatar-08.png" width="190">
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <h2 class="white">Login</h2>
                                    <form  method="POST" action="{{ route('admin.login.submit') }}">
                                        @csrf
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        @if (session('warning'))
                                            <div class="alert alert-warning">
                                                {{ session('warning') }}
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-3">
                                                        <input style="color: white;" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-pink btn-block btn-raised">Gönder</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-left"><a (click)="onForgotPassword()" class="white">Şifre mi Unuttum ?</a></div>
                                <div class="float-right"><a (click)="onRegister()" class="white">Kayıtlı Değil misiniz ? </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Login Page Ends-->
    </div>

@endsection