<style>
    .card {
        max-width: 90%;
        margin: auto;
    }
    button {
        max-width: 18rem;
    }
</style>

@extends('master.master')

@section('content')

    <div class="card border-secondary mt-3">
        <div class="card-body">
            <h4 class="card-title card-header text-muted text-center mb-3">Desligar</h4>
            <form>
                <div class="form-group row">
                    <label for="resig_siape" class="col-sm-2 col-form-label" hidden>SIAPE</label>
                    <div class="col-sm-12 d-flex justify-content-center">
                        <input type="text" id="resig_siape" placeholder="Matrícula SIAPE">
                    </div>
                </div>
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        Situação
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nome: </li>
                        <li class="list-group-item">Usuário: </li>
                        <li class="list-group-item">Designação: </li>
                    </ul>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary btn-block">Solicitar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
