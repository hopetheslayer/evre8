@extends('backend.Psikolog.layout.form')

@section('css')
    <link rel="stylesheet" href="/toast/toast.css">
    @endsection
@section('form-content')

    <form class="login100-form validate-form" method="POST" action="{{ route('psikolog.login.submit') }}">
        @csrf



        @include('backend.Psikolog.layout.partials.error')


        <span class="login100-form-title p-b-43">
					Psikolog Giriş
					</span>


        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input  type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
        </div>


        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
        </div>

        <div class="flex-sb-m w-full p-t-3 p-b-32">
            <div class="contact100-form-checkbox">
                <input  type="checkbox" class="input-checkbox100" id="ckb1"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="label-checkbox100" for="ckb1">
                    Beni Hatırla
                </label>


            </div>

            <div>
                <a href="#" class="txt1">
                    Şifre mi Unuttum
                </a>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-info btn-block btn-raised">Gönder</button>
            </div>
        </div>



        <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Üye Değil misin ?
						</span>

            <a href="{{route('psikolog.kayit.getir')}}" type="submit" class="btn btn-quaternary">Üye Ol</a>
        </div>



    </form>


@endsection


@section('js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="/toast/toast.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    {!! Toastr::message() !!}
@endsection