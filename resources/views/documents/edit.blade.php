@extends('layouts.template')

@section('title', 'Edit')

@section('content')
<h1>Edición de documento </h1>

<form action="{{route('documents.update', $document)}}" method="POST">

    @csrf
    @method('put')
    <label >
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name', $document->name)}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label >
        Descripcion:
        <br>
        <textarea name="description" rows="10" >{{old('description', $document->description)}}</textarea>
    </label>

    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Categoría:
        <br>
        <input type="text" name="category" value="{{old('category', $document->category)}}">
    </label>

    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <button type="submit">Guardar Documento</button>
</form>
@endsection
