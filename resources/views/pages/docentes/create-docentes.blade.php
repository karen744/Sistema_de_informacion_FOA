<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Docentes') }}
        </h2>
    </x-slot>
    
    <title>Registre sus datos</title>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario</title>
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
       
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Registrar Datos Docente</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('store.docentes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="codigo">Código de Docente</label>
                                <input type="text" id="codigo" name="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nombre">Nombre Completo</label>
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="identificacion">Identificación</label>
                                <input type="text" id="identificacion" name="identificacion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="celular">Numero de Celular</label>
                                <input type="text" id="celular" name="celular_docente" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
                    <div class="text-center">
                       <div class="action-btns">
                        <a href="{{ route('dashboard')}}" class="btn btn-danger">
                          <span class="align-middle">Cancelar</span>
                        </a>
                        <button type="submit" class="btn btn-primary">
                          Guardar
                        </button>
                      </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


    
    <!-- Resto del contenido de la página -->
</x-app-layout>
<style>
    .btn{
        background: #3123ae;

    }

</style>