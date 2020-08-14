<style>
    form {
        max-width: 90%;
        margin: auto;
    }
</style>

@extends('master.master')

@section('content')
Designar

<form>
    <div class="form-group row">
        <label for="desig_siape" class="col-sm-2 col-form-label">SIAPE</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desig_siape" placeholder="Matrícula SIAPE">
        </div>
    </div>
    <div class="form-group row">
        <label for="desig_user" class="col-sm-2 col-form-label">Usuário</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desig_user" placeholder="nome.sobrenome">
        </div>
    </div>
    <div class="form-group row">
        <label for="desig_name" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desig_name">
        </div>
    </div>
    <div class="form-group row">
        <label for="desig_super">Superintendência</label>
        <select id="desig_super" class="form-control">
            <option selected>Selecione...</option>
            <option>SR-I</option>
            <option>SR-II</option>
            <option>SR-III</option>
            <option>SR-V</option>
            <option>SR-V</option>
        </select>
    </diV>
    <div class="form-group row">
        <label for="desig_program">State</label>
        <select id="desig_program" class="form-control">
            <option selected>Selecione...</option>
            <option>CEAB DJ</option>
            <option>CEAB MAN</option>
            <option>CEAB RD</option>
        </select>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Solicitar</button>
        </div>
    </div>
</form>
@endsection
