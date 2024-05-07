<!-- resources/views/pages/estudiantes/estudiantes.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro Estudiantes') }}
        </h2>
    </x-slot>
        <div class="container">
       
            <title>Registre sus datos</title>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<br>
<body>
    <div class="container">
       
        <div class="card" style="border-width: 2px; border-color: black">
            <div class="card-header">
                <h5 class="card-title">Registro Estudiantes</h5>
            </div>
            <div class="card-body" >
                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        {{$error}}
                        @endforeach
                    </div>
                    @endif
                <form action="{{ route('estudiantes.importar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="archivo_excel">Documento Excel</label>
                    <br>
                    <br>
                    <input  type="file" name="archivo_excel" >
                    <br>
                    <br>
                    <button class="btn btn-primary " type="submit">Importar Estudiantes</button>
                </form>             
            </div>
        </div>
    </div>
    
</body>
</html>

</x-app-layout>
<style>
    .btn{
        background: #4dae44;

    }
    

</style>
