@extends('master.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 text-center div-center-screen">
                <form  method="post" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <fieldset>
                        <legend>Login</legend>
                    </fieldset>
                    <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                               placeholder="nome.sobrenome" autofocus>
                        <span class="fa fa-user form-control-feedback"></span>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" placeholder="senha" name="password">
                        <span class="fa fa-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
