@extends('site.layouts.basico')
{{--- comentario  ---}}

@section('titulo', 'Contato')


@section('conteudo')
<h3> Contato </h3>

@include('site.layouts._partials.topo')

<form action="{{ route('contato') }}" method="POST">
    @csrf
    <input type="text" name="nome" />
    <br>
    <textarea name="mensagem"></textarea> <br>
    <input type="submit" value="enviar">
</form>

@endsection
