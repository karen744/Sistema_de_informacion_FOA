<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    
    <title>Registrar Cursos</title>
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
                <h5 class="card-title">Registrar Curso</h5>
            </div>
            <div class="card-body">
                <form>
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
                                <label class="form-label" for="tipo">Semestre</label> <br>
                                <select class="input-select" id="tipo" name="tipo" class="select2 form-select" data-allow-clear="true">
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
                                <label class="form-label" for="intensidad">Intensidad Horaria</label>
                                <input type="text" id="intensidad" name="intensidad" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="num_creditos">Número de Créditos</label>
                                <input type="text" id="num_creditos" name="num_creditos" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="teorica" name="teorica">
                                    <label class="form-check-label" for="teorica">Teórica</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="practica" name="practica">
                                    <label class="form-check-label" for="practica">Práctica</label>
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="button" class="btn btn-primary" onclick="agregarDocente()">Agregar Docente</button>
                            </div> <br>
                            <div class="text-left">
                                <button type="button" class="btn btn-primary" onclick="agregarEstudiante()">Agregar Estudiantes</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="descripcion">Descripción</label>
                                <textarea id="descripcion" name="descripcion" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="resultado_aprendizaje">Resultados de Aprendizaje</label>
                                <textarea id="resultado_aprendizaje" name="resultado_aprendizaje" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="enfoque">Enfoque</label>
                                <textarea id="enfoque" name="enfoque" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="criterios">Criterios</label>
                                <textarea id="criterios" name="criterios" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="bibliografia">Bibliografía</label>
                                <textarea id="bibliografia" name="bibliografia" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <style>
                            .btn{
                                background: #3123ae;

                            }

                        </style>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn-primary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


    
    <!-- Resto del contenido de la página -->
</x-app-layout>