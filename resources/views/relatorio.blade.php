<style>
    table {
        font-size: 0.7rem;
    }
</style>

@extends('master.master')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>Relatório</h1>
        <span>
            <button type="button" class="btn btn-outline-dark" data-toggle="button" aria-pressed="false">
                CSV
            </button>
            <button type="button" class="btn btn-outline-dark" data-toggle="button" aria-pressed="false">
                XML
            </button>
            <button type="button" class="btn btn-outline-dark" data-toggle="button" aria-pressed="false">
                PDF
            </button>
        </span>

    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">MATR.</th>
            <th scope="col">SERVIDOR</th>
            <th scope="col">PROGRAMA</th>
            <th scope="col">ATO DESIG</th>
            <th scope="col">ENTRADA</th>
            <th scope="col">SAIDA</th>
        </tr>
        </thead>
        <tbody>
        @foreach($report as $register)
            <tr>
                <td>{{$register -> registry}}</td>
                <td>{{$register -> analyst}}</td>
                <td>{{$register -> program}}</td>
                <td>{{$register -> designation_act}}</td>
                <td>{{$register -> start_date}}</td>
                <td>{{$register -> end_date}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
