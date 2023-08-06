@extends('layouts.app')

@section('content')
 <div class="container">
    <h1> Página de Registro</h1>
    <hr>
    <form action="{{ route ('aulas-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome...">
        </div>
        <div class="form-group">
            <label for="nome">Materia:</label>
            <input type="text" class="form-control" name="materia" placeholder="Digite a materia cursada...">
        </div>
        <div class="form-group">
            <label for="nome">Ano:</label>
            <input type="date" class="form-control" name="ano_atual" placeholder="Digite o Ano Atual...">
        </div>
        <div class="form-group">
            <label for="nome">Nota:</label>
            <input type="number" class="form-control" name="notas" placeholder="Digite a Nota...">
        </div>
        <br>
        <div class="form group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
 </div>
@endsection
