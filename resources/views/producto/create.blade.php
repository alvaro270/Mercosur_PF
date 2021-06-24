@extends('adminlte::page')

@section('title', 'Crud con laravel 8')

@section('content_header')
    <h1>Crear producto</h1>
@stop

@section('content')
<form action="/productos" method="POST">
  @csrf
  
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" value name="nombre" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo</label>
    <input id="tipo" value name="tipo" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" value name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" value name="descripcion" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" value name="fecha" type="date" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">importa</label>
    <input id="idpais" value name="idpais" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">exporta</label>
    <input id="idpais2" value name="idpais2" type="text" class="form-control" tabindex="7">
  </div>
  <a href="/productos" class="btn btn-secondary" tabindex="8">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop