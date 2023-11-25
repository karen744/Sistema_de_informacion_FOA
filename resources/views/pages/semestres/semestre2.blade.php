<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Semestre 2') }}
        </h2>
    </x-slot>
        <div class="container">
       
            <title>Semestre 2</title>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<br>
<body>
    <div>
        <a href="{{ route('semestre1_cursos.create') }}" class="btn btn-primary" style="margin-right: 400px" >Registro cursos</a>
    </div>
    <br>
 
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item" style="background-color: rgb(62, 236, 71)">Basicas de Fundamentacion</li>
          <li class="list-group-item" style="background-color: rgb(218, 236, 62)">Basicas Disciplinares</li>
          <li class="list-group-item" style="background-color: rgb(252, 111, 111)">Especificas diciplinares</li>
        </ul>
        
      </div>
      <br>

      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item" style="background-color: rgb(252, 111, 111)">Teorias Especificas (T:6)</li>
        </ul>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item" style="background-color: rgb(252, 111, 111)">Practica Integrada (P:15)</li>
        </ul>
      </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-yiDgyDEi1ce/l7btxcM8sPRRlohNA5nGm4NTP7Oe+njfukhdj4DTt+IfaPMj4PaX" crossorigin="anonymous"></script>
    

  
    
</body>
</html>

</x-app-layout>

