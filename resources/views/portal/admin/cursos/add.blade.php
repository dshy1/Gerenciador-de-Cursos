@extends('base.header')

@section('title', 'Adicionar Curso')

@section('content')

<div class="container">
    <div class="row">
        <form class="card" action="{{Route('curso.save')}}" method="POST">
            <div class="card-header">
                <h3 class="card-title">Adicionar Curso</h3>
            </div>
            <div class="card-body" >
            @csrf

                @include('portal.admin.cursos.form')

            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@stop
