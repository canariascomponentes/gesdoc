@extends('layouts.template')

@section('title', 'Home')

@section('content')
<h1>Listado de documentos</h1>
<a href="{{route('documents.create')}}">Crear Documento</a>
<ul>
    @foreach ($documents as $document)
        <li><a href="{{route('documents.show', $document)}}">{{$document->name}}</a></li>
    @endforeach
</ul>

{{$documents->links()}}
@endsection
