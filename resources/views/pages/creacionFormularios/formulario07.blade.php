<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <title>FOA 07</title>
    <body>
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('FORMULARIO #07 - PROGRAMACION TEMATICA DE LA ASIGNATURA') }}
                </h2>
            </x-slot>
            {{-- <!--<form action="{{ route('formulario1.store') }}" method="POST" enctype="multipart/form-data">--> --}}
            <div class="card">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">FORMULARIO FOA 07</h5>
                    <div class="action-btns" style="text-align: right">
                        <a href="{{ route('cursos')}}" class="btn btn-danger">
                            <span class="align-middle" type="submit" style="background-color: #d52d32; color: #ffffff; border: none; border-radius: 4px; padding: 4px 10px; font-size: 16px; font-weight: bold; cursor: pointer;">Cancelar</span>
                        </a>
                        <button type="submit" style="background-color: #007bff; color: #ffffff; border: none; border-radius: 4px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;">Guardar</button>
    
                    </div>
                </div>
              <br>
              <br>
    <!-- ---------------------------------------PRIMERA HOJA -------------------------------------- -->
                 <form action="">
                    <div class="card" style="width: 50rem;">
                        <div class="card-body">
                          <h5 class="card-title">IDENTIFICACIÓN DE LA ASIGNATURA</h5>
                          <div class="form-group">
                            <label class="form-label" for="tipo">Docentes</label>
                            <select id="seleccion_docente" name="tipo" class="select2 form-select" data-allow-clear="true" style="width: 20rem;">
                              <option value="">Seleccione Docente</option>
                              <option value="docente..."></option>
                            </select>
                          </div>
                          <br>
                          <br>
                         <p>
                          Seleccion de Curso
                         </p>
                        </div>
                      </div>
<br>
<br>
                    <div class="card" style="width: 50rem;">
                        <div class="card-body">
                        <h5 class="card-title">1</h5>
                        <div class="form-group">
                            <label class="form-label" for="fecha_semana7" style="text-align: left;" >Fecha</label><br>
                            <input class="input" type="date" id="fecha_semana7" name="fecha_semana7" class="form-control" style="text-align: left;" />

                        </div>
                        <br>
                        <p>
                            Revisión realizada por:   Comité Curricular del Programa y Director 
                        </p>
                        </div>
                    </div>
                    <br>
                    <br>
                         <div class="card" style="width: 50rem;">
                          <div class="card-body">
                             <h5 class="card-title">3</h5>
                             <br>
                               <p>
                                DESCRIPCIÓN Y JUSTIFICACIÓN CURRICULAR <br>
                                DESCRIPCION DEL CURSO <br>
                                JUSTIFICACIÒN <br>
                                PEI <br>
                                Pep <br>
                                Resultados de aprendizaje – perfil egreso <br>
 
                                </p>
                                </div>
                             </div>
                             <br>
                             <div class="card" style="width: 50rem;">
                                <div class="card-body">
                                   <h5 class="card-title">4</h5>
                                   <br>
                                     <p>
                                        RESULTADOS DE APRENDIZAJE
                                      </p>
                                      <input class="input" type="text" name="porcentaje_avance" class="form-control" id="porcentaje_avance" style="width: 20rem;" />
                                      </div>
                                   </div>
                                 </form>   
                               
         
            <div id="datos-ingresados"></div>
        </x-app-layout>
    </body>
</html>
