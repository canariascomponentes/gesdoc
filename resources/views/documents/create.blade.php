@extends('layouts.template')

@section('title', 'Home')

@section('content')
<h1>Formulario de creación de documento </h1>

<form action="{{route('documents.store')}}" method="POST">

    @csrf
    <label >
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>

    <label >
        Nombre:
        <br>
        <input type="text" name="slug" value="{{old('slug')}}">
    </label>
     @error('slug')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label >
        Descripcion:
        <br>
        <textarea name="description" rows="10">{{old('description')}}</textarea>
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
        <input type="text" name="category" value="{{old('category')}}">
    </label>

    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">Crear Documento</button>
</form>
@endsection

