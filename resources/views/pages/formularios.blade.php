<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formularios</title>
    <style>
        .boton-formulario {
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
        
        .boton-profesional:hover {
            background-color: #0056b3;
        }
        .boton-foa1{
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
        
        .boton-foa1:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Formularios') }}
            </h2>
        </x-slot>

        <!-- Contenido adicional aquí -->
        <a href="{{ route('formulario1.create') }}" class="boton-formulario">Ir a Formulario 1</a>
        


       
        </div>

    </x-app-layout>
</body>
</html>
