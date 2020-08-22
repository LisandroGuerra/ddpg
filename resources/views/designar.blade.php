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
        <h4 class="card-title card-header text-muted text-center mb-3">Designar</h4>
        <form class="form-group">
            <div class="form-group row">
                <label for="desig_siape" class="col-sm-2 col-form-label" hidden>SIAPE</label>
                <div class="col-sm-12 d-flex justify-content-center">
                    <input class="col-form-label-lg" inputmode="numeric" type="text" id="desig_siape" placeholder="Matrícula SIAPE">
                </div>
            </div>
            <div class="card m-3">
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
                <label for="desig_super" hidden>Superintendência</label>
                <select id="desig_super" class="custom-select custom-select-lg ml-3 mr-3">
                    <option selected>Superintendência</option>
                    <option>SR-I</option>
                    <option>SR-II</option>
                    <option>SR-III</option>
                    <option>SR-V</option>
                </select>
            </diV>
            <div class="form-group row">
                <label for="desig_program" hidden>Programa</label>
                <select id="desig_program" class="custom-select custom-select-lg ml-3 mr-3">
                    <option selected>Programa</option>
                    <option>CEAB DJ</option>
                    <option>CEAB MAN</option>
                    <option>CEAB RD</option>
                </select>
            </div>

            <div class="form-group row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Solicitar</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
