<!-- resources/views/pages/estudiantes/estudiantes.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro Cursos') }}
        </h2>
    </x-slot>
            <title>Registro cursos</title>
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
       
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Registro Cursos</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="codigo_curso">Código de Curso</label>
                                <input type="text" id="codigo_curso" name="codigo_curso" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nombre_curso">Nombre del Curso</label>
                                <input type="text" id="nombre_curso" name="nombre_curso" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="semestre">Semestre</label> <br>
                                <select class="input-select" id="semestre" name="semestre" class="select2 form-select" data-allow-clear="true"> <br>
                                  <option value="">Seleccione semestre</option>
                                  <option value="primero">1</option>
                                  <option value="segundo">2</option>
                                  <option value="tercero">3</option>
                                  <option value="cuarto">4</option>
                                  <option value="quinto">5</option>
                                  <option value="sexto">6</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="periodo">Periodo</label> <br>
                                <select class="input-select" id="periodo" name="periodo" class="select2 form-select" data-allow-clear="true">
                                  <option value="">Seleccione Periodo</option>
                                  <option value="periodo_A">A</option>
                                  <option value="periodo_B">B</option>
                                </select>
                              </div>
                            <div class="form-group">
                                <label class="form-label" for="modalidad">Modalidad</label>
                                <select class="input-select" id="modalidad" name="modalidad" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Seleccione Modaliad</option>
                                    <option value="teorica">Teorica</option>
                                    <option value="practica">Practica</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="grupo">Grupo</label>
                                    <input type="text" id="grupo" name="grupo" class="form-control">
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

</x-app-layout>

