<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Cursos</title>
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Cursos') }}
      </h2>
  </x-slot>
  <style>
  .boton-crearcurso {
    position: relative;
    top: 100px;
    left: 100px;
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #ffffff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>

  <a href="{{ route('cursos.create') }}" class="boton-crearcurso">Crear Curso</a>
</x-app-layout>
</head>
</html>
