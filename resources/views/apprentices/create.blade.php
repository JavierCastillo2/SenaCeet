@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Nuevo aprendiz</h1>
@stop

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="col-md-3">
        <form action="{{route('apprentices.store')}}" method="post" >
            @csrf
            <div class="form-group">
                <label for="">Ficha</label>
            </br>
                <select class="form-select" name="ficha_id" aria-label=".form-select-lg example">
                    <option disabled selected>Seleccione la ficha</option>
                @foreach ($apprentice as $apprentice)

                <option value="{{$apprentice->ficha->id}}">{{$apprentice->ficha->name}}</option>

            </select>
            </br>
            <select class="form-select" name="ficha_id" aria-label=".form-select-lg example">
                <option disabled selected>Seleccione la ficha</option>

            <option value="{{$apprentice->ficha->id}}">{{$apprentice->ficha->name}}</option>

            @endforeach

            <div class="form-group, p-2">
                <button class="btn btn-primary" type="submit">Crear</button>
                <a href="{{route('apprentices.index')}}" class="btn btn-danger" >Cancelar</a>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
