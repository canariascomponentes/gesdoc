@extends('layouts.template')

@section('title', 'Home')

@section('content')
<h1>Mostrando la información del documento {{$document->name}} </h1>
<a href="{{route('documents.index')}}">Volver</a>
<br>
<a href="{{route('documents.create')}}">Crear Nuevo Documento</a>
<br>
<a href="{{route('documents.edit', $document)}}">Editar Curso</a>
<p><strong>Categoría</strong> {{$document->category}}</p>
<p><strong>Descripción: </strong> {{$document->description}}</p>

<form action="{{route('documents.destroy', $document)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit"> Eliminar</button>
</form>
@endsection
