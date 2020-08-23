<style>
    .div-center-screen {
        max-width: 80%;
        margin: auto;
    }
    /* Font Awesome Icons */
    .form-group a i {
        font-family: FontAwesome;
        margin: 0 auto;
        font-size: 5rem;
        font-style: normal;
    }
    form .fa {
        top: 13px;
        right: 1rem;
    }
</style>

@extends('master.master')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-5 text-center div-center-screen">
                <form  method="post" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <fieldset>
                        <legend>Login</legend>
                    </fieldset>
                    <div class="form-group position-relative has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" class="form-control col-form-label-lg" name="username" value="{{ old('username') }}"
                               placeholder="nome.sobrenome" autofocus>
                        <i class="fa fa-user form-control-feedback position-absolute"></i>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group position-relative has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control col-form-label-lg" placeholder="senha" name="password">
                        <i class="fa fa-lock form-control-feedback position-absolute"></i>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br/>
                    <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

