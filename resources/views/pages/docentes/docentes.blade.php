<x-app-layout>
<!DOCTYPE html>
<html lang="en">

    <!-- Enlace a la hoja de estilos de Bootstrap (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docentes</title>
    


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Docentes') }}
        </h2>
    </x-slot>
    <br>
    <div>
    <a href="{{ route('create.docentes') }}" class="btn btn-primary" style="margin-left: 172px">Registro Docentes</a>
    </div>
    <br>
    <div class="container">
     
        <div class="card">
            <div class="card-header">

                <h5 class="card-title">Listado de Docentes</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th>Código de Docente</th>
                            <th>Nombre Completo</th>
                            <th>Identificación</th>
                            <th>Número de Celular</th>
                            <th>Email</th>
                          </tr>
                        <thead>
                            @foreach ($docentes as $docente)
                            <tr>
                                <td>{{ $docente->codigo }}</td>
                                <td>{{ $docente->nombre }}</td>
                                <td>{{ $docente->identificacion }}</td>
                                <td>{{ $docente->celular_docente }}</td>
                                <td>{{ $docente->email }}</td>
                            </tr>
                            @endforeach
                        </thead>
                     
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Resto del contenido de la página -->
</x-app-layout>
