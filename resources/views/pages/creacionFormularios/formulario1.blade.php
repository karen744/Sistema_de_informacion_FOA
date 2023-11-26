<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>FOA 15</title>
    <style>
        .boton-formulario {
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
        .input-select{
          width: 250px;

        }

        .select2 {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .textarea-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        .file-control {
            margin-top: 10px;
        }
        .input {
      width: 250px; /* Ajusta el valor según tus necesidades */
        }

        .card-title {
            margin-bottom: 0;
        }

        .action-btns {
            margin-top: 10px;
        }

        .action-btns .btn {
            margin-left: 10px;
        }
        .btn
        {
            border: #0056b3
        }
        
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('FORMULARIO #1 - SEGUIMIENTO AL CONTENIDO POR ASIGNATURA') }}
            </h2>
        </x-slot>
        <!--<form action="{{ route('formulario1.store') }}" method="POST" enctype="multipart/form-data">-->
        <div class="card">
            <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <h5 class="card-title mb-sm-0 me-2">FORMULARIO FOA 15</h5>
                <div class="action-btns" style="text-align: right">
                    <a href="{{ route('cursos')}}" class="btn btn-danger">
                        <span class="align-middle" type="submit" style="background-color: #d52d32; color: #ffffff; border: none; border-radius: 4px; padding: 4px 10px; font-size: 16px; font-weight: bold; cursor: pointer;">Cancelar</span>
                    </a>
                    <button type="submit" style="background-color: #007bff; color: #ffffff; border: none; border-radius: 4px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;">Guardar</button>

                </div>
            </div>
            <table>
                <tr>
                  <td>
                    <div class="card">
                      <div class="card-body">
                        <div class="form-group">
                          <label class="form-label" for="tipo">Docentes</label>
                          <select id="seleccion_docente" name="tipo" class="select2 form-select" data-allow-clear="true">
                            <option value="">Seleccione Docentes Teorica</option>
                            <option value="docente..."></option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select id="tipo" name="tipo" class="select2 form-select" data-allow-clear="true">
                            <option value="">Seleccione Docentes Practica</option>
                            <option value="docente..."></option>
                          </select>
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
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="card" >
                      <div class="card-body">
                        <div class="form-group">
                          <label for="opciones">Area Curricular:</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="opcion1" name="opciones[]" value="basica_fundamentacion">
                            <label class="form-check-label" for="basica_fundamentacion">
                              Básica de Fundamentación
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="opcion2" name="opciones[]" value="basica_disciplinar">
                            <label class="form-check-label" for="basica_disciplinar">
                              Básica Disciplinar
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="opcion3" name="opciones[]" value="específica_disciplinar">
                            <label class="form-check-label" for="específica_disciplinar">
                              Específica Disciplina
                            </label>
                          </div>
                          <div class="form-group"  style="text-align: left;">
                            <label class="form-label" style="text-align: left;" for="nombre "  style="text-align: left;">Nombre del Curso</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" style="text-align: left;"/>
                          </div>
                          <div class="form-group"  style="text-align: left;">
                            <label class="form-label" style="text-align: left;" for="periodo "  style="text-align: left;">Periodo Academico</label> <br>
                            <input type="text" id="periodo" name="periodo" class="periodo" style="text-align: left;"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                
                <table class="table">
                    <tbody>
                      <tr>
                        <td colspan="2" style="text-align: left; font-weight: bold;">CUMPLIMIENTO DEL CONTENIDO:</td>
                      </tr>
                      <tr>
                        <td colspan="2" style="text-align: left; font-weight: bold;">Diligenciar los conceptos que dan cuenta de los criterios requeridos para el seguimiento del curso en los tres (3) momentos</td>
                      </tr>
                      <tr>
                        <td style="width: 30%; text-align: left">Semana 1-2</td>
                        <td>
                          <div class="form-group" style="text-align: left;">
                            <label class="form-label" for="fecha_semana2" style="text-align: left;" >Fecha</label>
                            <input class="input" type="date" id="fecha_semana2" name="fecha_semana2" class="form-control" style="text-align: left;" />
                          </div>
                          
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="descripcion_proceso_induccion">Socialización y concertación</label>
                                        <p>1. Descripción de proceso de inducción. Socialización FOA 7, acuerdos frente a Criterios y porcentajes de evaluación.</p>
                                        <textarea name="descripcion_proceso_induccion" id="descripcion_proceso_induccion" cols="30" rows="10"></textarea>
                                    </div>
                                    <label class="form-label" for="organizacion_grupos_practicas">Socialización y concertación</label>
                                    <p>2. Organización de grupos de práctica por docente, horarios y escenarios de práctica.</p>
                                    <textarea name="organizacion_grupos_practicas" id="Organizacion_grupos_practicas" cols="30" rows="10"></textarea>
                                  </div>
                                </div><br>
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th>Docentes</th>
                                      <th>Estudiantes</th>
                                      <th>Escenario de Prácticas</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Nombre Docente 1</td>
                                      <td>Nombre Estudiante 1</td>
                                      <td>Escenario 1</td>
                                    </tr>
                                    <tr>
                                      <td>Nombre Docente 2</td>
                                      <td>Nombre Estudiante 2</td>
                                      <td>Escenario 2</td>
                                    </tr>
                                    <!-- Agrega más filas según sea necesario -->
                                  </tbody>
                                </table><br>
                                <!------------------ primer recuadro cuestionario -------------------->
                              <td>
                                <div class="card" >
                                  <div class="card-body">
                                    <div class="form-group">


                                <td style="width: 30%; text-align: left">Semana 7-8</td> <br>
                                <label class="form-label" for="descripcion_proceso_induccion">Seguimiento</label>
                                <td>
                                  <div class="form-group" style="text-align: left;">
                                    <label class="form-label" for="fecha_semana7" style="text-align: left;" >Fecha</label><br>
                                    <input class="input" type="date" id="fecha_semana7" name="fecha_semana7" class="form-control" style="text-align: left;" />
                                  </div>
                                </td>
                                <div>
                                <p>1. Descripción del avance del contenido según proceso de planificación. </p>
                                <textarea name="descripcion_avance_contenido" id="descripcion_avance_contenido" cols="30" rows="10"></textarea>
                              </div>
                            
                                  <label for="opciones1">Avance acorde a lo planeado:</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="opcion_si" name="opciones1[]" value="si">
                            <label class="form-check-label" for="si">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="opcion_no" name="opciones1[]" value="no">
                            <label class="form-check-label" for="no">
                              NO
                            </label>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="porcentaje_avance">Porcentaje de avance: </label> <br>
                                <input class="input" type="number" name="porcentaje_avance" class="form-control" id="porcentaje_avance" />
                               </div>
                        </div>
                        <br>
                          
                                <label for="opciones2">1.1 Observaciones de no cumplimiento:</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="orden_publico" name="opciones2[]" value="orden_publico">
                                  <label class="form-check-label" for="orden_publico">
                                    Orden público
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="calamidad" name="opciones2[]" value="calamidad">
                                  <label class="form-check-label" for="calamidad">
                                    Calamidad
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="administracion_udenar" name="opciones2[]" value="administracion_udenar">
                                  <label class="form-check-label" for="administracion_udenar">
                                    Administración udenar
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="administracion_de_entidades" name="opciones2[]" value="administracion_de_entidades">
                                  <label class="form-check-label" for="administracion_de_entidades">
                                    Administración de entidades
                                  </label>
                                </div>
                              </td>
                              <br>
                              <div>
                              <p>2. Descripción de valoraciones y logros evidenciados frente a los resultados de aprendizaje <br>
                                propuestos en el FOA 7 cualitativos y cuantitativos con y promedio general. </p>
                                <textarea name="descripcion_valoraciones_logros" id="descripcion_valoraciones_logros" cols="30" rows="10"></textarea>
                              </div>
                              <div>
                              <label for="opciones3">¿Se están cumpliendo los resultados de aprendizaje?:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion3_si" name="opciones3[]" value="opcion3_si">
                        <label class="form-check-label" for="opcion3_si">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion3_no" name="opciones3[]" value="opcion3_no">
                        <label class="form-check-label" for="opcion3_no">
                          NO
                        </label>
                      </div>
                    </div>
                    <div>
                        <p>Plan de mejora según taxonomía de Bloom: <br>
                        -> Cognitivo <br>
                        -> Análisis <br>
                        -> Aplicación <br>
                         </p>
                         <br>
                        </div>
                        <div>
                         <p>3. Promedio general de estudiantes <br> </p>
                         <input type="number">
                         <div>
                          <br>
                         <p>4. Análisis de fortalezas y aspectos por mejorar de los contenidos, respecto a las estrategias de enseñanza y evaluación<br>
                          por parte de los docentes y las estrategias de aprendizaje de los estudiantes. <br>
                          Propuesta de estrategias didácticas de refuerzo. <br></p>
                          <textarea name="analisis_fortalezas" id="analisis_fortalezas" cols="30" rows="10"></textarea> <br>
                        </div>
                        <br>
                        <div>
                          5. Identificación de casos estudiantiles para acompañamiento reportados a PAPE a través del FOA 10.  <br></p>
                          <textarea name="identificaion_casos_estudiantes" id="" cols="30" rows="10"></textarea>
                        </div>
                      </div>
                          <label for="opciones4">Reporte General.</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion3_si" name="opciones4[]" value="opcion4_si">
                        <label class="form-check-label" for="opcion4_si">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion4_no" name="opciones4[]" value="opcion4_no">
                        <label class="form-check-label" for="opcion4_no">
                          NO
                        </label>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                        <label class="form-label" for="nombre_estudiante">Nombre Estudiante </label><br>
                        <input class="input" type="text" name="nombre_estudiante" class="form-control" id="nombre_estudiante" />
                       </div>
                      <div class="col">
                        <label class="form-label" for="identidicacion_estudiante">Identificación Estudiante </label><br>
                        <input class="input" type="number" name="identidicacion_estudiante" class="form-control" id="identidicacion_estudiante" />
                       </div>
                       <div class="col">
                        <label class="form-label" for="codigo_estudiantil">Código Estudiantil</label><br>
                        <input class="input" type="number" name="codigo_estudiantil" class="form-control" id="codigo_estudiantil" />
                       </div>
                    </div><br>
                    <div class="form-group" style="text-align: left;">
                      <label class="form-label" for="fecha" style="text-align: left;" >Fecha del Reporte: </label> <br>
                      <input class="input" type="date" id="fecha_reporte" name="fecha_reporte" class="form-control" style="text-align: left;" />
                    </div><br>
                    <div>
                    <label for="opciones5">6. Registro de Novedades  (cambios, retiros, ingresos)</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion5_si" name="opciones5[]" value="opcion5_si">
                        <label class="form-check-label" for="opcion5_si">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion5_no" name="opciones5[]" value="opcion5_no">
                        <label class="form-check-label" for="opcion5_no">
                          NO
                        </label>
                      </div>
                    </div>
                      <br>
                      <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th>Novedad</th>
                            <th>Nombre del Estudiante</th>
                            <th>Observacion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>cambio</td>
                            <td>Nombre Estudiante 1</td>
                            <td>Observacion 1</td>
                          </tr>
                          <tr>
                            <td>retiro</td>
                            <td>Nombre Estudiante 2</td>
                            <td>Observacion 2</td>
                          </tr>
                          <tr>
                            <td>ingreso</td>
                            <td>Nombre Estudiante 3</td>
                            <td>Observacion 3</td>
                          </tr>
                          <tr>
                            <td>otro</td>
                            <td>Nombre Estudiante 4</td>
                            <td>Observacion 4</td>
                          </tr>
                          
                        </tbody>
                      </table>
<!-- ---------------------------------------Segundo Recuadro-------------------------------------- -->
                          
                            </div>
                        </fieldset>
                    </div>
                </div>
                <td>
                  <div class="card" >
                    <div class="card-body">
                      <div class="form-group">

                  <td style="width: 30%; text-align: left">Semana 16-18</td>
                  <td>
                    <div class="form-group" style="text-align: left;">
                      <label class="form-label" for="fecha_semana16" style="text-align: left;" >Fecha</label><br>
                      <input class="input" type="date" id="fecha_semana16" name="fecha_semana16" class="form-control" style="text-align: left;" />
                    </div>
                  </td>
                  <label class="form-label" for="culminacion" style="text-align: left;" >Culminación</label><br>
                  <div>
                  <p>1. Descripción de valoraciones y logros finales de resultados de aprendizaje cualitativos y cuantitativos <br>
                  </p>
                  <textarea name="descripcion_valoraciones_logros_finales" id="descripcion_valoraciones_logros_finales" cols="30" rows="10"></textarea>
                </div>
                <br>

                <div>
                  <p>2. Descripción del promedio general del grupo.<br>
                  </p>
                  <textarea name="descripcion_promedio_general_grupo" id="descripcion_promedio_general_grupo" cols="30" rows="10"></textarea>
                </div> 
                <br>
                
                  <div>
                  <p>3. Resultados finales de estrategias de enseñanza y evaluación por parte de los docentes y las estrategias de aprendizaje.<br>
                  </p>
                  <textarea name="resultados_finales_enseñanza" id="resultados_finales_enseñanza" cols="30" rows="10"></textarea>
                </div>
                <br>

                  <div>
                  <p>4. Análisis de los procesos de mejora relacionados con el punto 4 del proceso de seguimiento (semana 7-8).<br>
                  </p>
                  <textarea name="analisis_procesos_mejora" id="analisis_procesos_mejora" cols="30" rows="10"></textarea>
                </div>
                <br>

                  <div>
                  <p>5. Articulación teórica – práctica<br>
                  </p>
                  <textarea name="articulacion_teorica_practica" id="articulacion_teorica_practica" cols="30" rows="10"></textarea>
                </div>
                <br>

                  <div>
                  <p>6. Reporte de novedades en casos estudiantiles para acompañamiento reportados a PAPE a través del FOA 10. <br>
                  </p>
                  <textarea name="reporte_novedades_casos_reportados_foa10" id="reporte_novedades_casos_reportados_foa10" cols="30" rows="10"></textarea>
                </div>

                  <label for="opciones5">Reporte General:</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion5_si" name="opciones5[]" value="opcion5_si">
                        <label class="form-check-label" for="opcion5_si">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="opcion5_no" name="opciones5[]" value="opcion5_no">
                        <label class="form-check-label" for="opcion5_no">
                          NO
                        </label>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col">
                        <label class="form-label" for="nombre_estudiante">Nombre Estudiante </label><br>
                        <input class="input" type="text" name="nombre_estudiante" class="form-control" id="nombre_estudiante" />
                       </div>
                      <div class="col">
                        <label class="form-label" for="identidicacion_estudiante">Identificación Estudiante </label><br>
                        <input class="input" type="number" name="identidicacion_estudiante" class="form-control" id="identidicacion_estudiante" />
                       </div>
                       <div class="col">
                        <label class="form-label" for="codigo_estudiantil">Código Estudiantil</label><br>
                        <input class="input" type="number" name="codigo_estudiantil" class="form-control" id="codigo_estudiantil" />
                       </div>
                    </div><br>
                    <div class="form-group" style="text-align: left;">
                      <label class="form-label" for="fecha_reporte" style="text-align: left;" >Fecha Reporte: </label> <br>
                      <input class="input" type="date" id="fecha_reporte" name="fecha_reporte" class="form-control" style="text-align: left;" />
                    </div><br>
                    <div>
                    <p>7. Sugerencias, observaciones  y/o recomendaciones. <br></p>
                    <textarea name="sugerencias_observaciones_recomendaciones" id="" cols="30" rows="10"></textarea>
                  </div>
                  <br>
                  <div>
                     <p>Anexar- Ficha de sistematización de práctica para cursos teórico – prácticos y proyectos formativos.
                      <a href="ruta/al/archivo.pdf" target="_blank" class="boton">
                        <i class="fas fa-file-pdf verPro"></i> Subir Ficha
                      </a>
                     </p>
                   </td>
                  </div>
           
            </div>
        </div>

        <div class="card" >
        <div>
          <p>Nombre y firma del Docente Coordinador del curso/ Teoría
           <a href="ruta/al/archivo.pdf" target="_blank" class="boton1">
             <i class="fas fa-file-pdf verPro"></i> Subir Firma
           </a>
          </p>
        </div>
        <br>
        <div>
          <p>Nombre y firma del Docente /Práctica - 1
           <a href="ruta/al/archivo.pdf" target="_blank" class="boton1">
             <i class="fas fa-file-pdf verPro"></i> Subir Firma
           </a>
          </p>
        </div>
        <br>
        <div>
          <p>Nombre y firma del Docente /Práctica - 2
           <a href="ruta/al/archivo.pdf" target="_blank" class="boton1">
             <i class="fas fa-file-pdf verPro"></i> Subir Firma
           </a>
          </p>
        </div>
        <br>
        <div>
          <p>Nombre y firma del Docente /Práctica -3
           <a href="ruta/al/archivo.pdf" target="_blank" class="boton1">
             <i class="fas fa-file-pdf verPro"></i> Subir Firma
           </a>
          </p>
        </div>
        <br>
        <div>
          <p>Nombre y firma del Docente /Práctica - 4
           <a href="ruta/al/archivo.pdf" target="_blank" class="boton1">
             <i class="fas fa-file-pdf verPro"></i> Subir Firma
           </a>
          </p>
        </div>
        <br>
        <div>
          <p>Nombre y firma del Docente /Práctica - 5
           <a href="ruta/al/archivo.pdf" target="_blank" class="boton1">
             <i class="fas fa-file-pdf verPro"></i> Subir Firma
           </a>
          </p>
        </div>
      </div>
        
      </form>
      
        <div id="datos-ingresados"></div>
    </x-app-layout>
    
</body>
</html>
<style>
  /* Estilos para el botón */
  .boton {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    background-color: #4CAF50; /* Color de fondo verde (puedes cambiarlo) */
    color: white; /* Color del texto */
    border: 1px solid #4CAF50; /* Borde del botón */
    border-radius: 5px; /* Esquinas redondeadas */
    cursor: pointer;
  }
  .boton1 {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    background-color: #b9382a; /* Color de fondo verde (puedes cambiarlo) */
    color: white; /* Color del texto */
    border: 1px solid #b9382a; /* Borde del botón */
    border-radius: 5px; /* Esquinas redondeadas */
    cursor: pointer;
  }
</style>