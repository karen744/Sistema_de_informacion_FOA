<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Semestres') }}
        </h2>
    </x-slot>
        <div class="container">
       
            <title>Semestres</title>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body>
    <div class="container mt-4" >
        <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card" style="border-color: rgb(4, 24, 4); border-width: 2px;">
                        <a href="{{ route('semestres.semestre1.index') }}">
                            <img src="1.png" class="1.png" alt="1.png">
                        </a>
                    </div>
                    <br>
                    <div class="card" style="border-color: rgb(4, 24, 4); border-width: 2px;">
                        <a href="{{ route('semestres.semestre2.index') }}">
                            <img src="2.png" class="2.png" alt="2.png">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-color: rgb(4, 24, 4); border-width: 2px;">
                    <a href="{{ route('semestres.semestre3.index') }}">
                        <img src="3.png" class="3.png" alt="3.png">
                    </a>
                    </div>
                    <br>
                    <div class="card" style="border-color: rgb(4, 24, 4); border-width: 2px;">
                    <a href="{{ route('semestres.semestre4.index') }}">
                        <img src="4.png" class="4.png" alt="4.png">
                    </a>
                       
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card" style="border-color: rgb(4, 24, 4); border-width: 2px;">
                        <a href="{{ route('semestres.semestre5.index') }}">
                            <img src="5.png" class="5.png" alt="6.png">
                        </a>
                    </div>
                    <br>
                    <div class="card" style="border-color: rgb(4, 24, 4); border-width: 2px;">
                        <a href="{{ route('semestres.semestre6.index') }}">
                            <img src="6.png" class="6.png" alt="6.png">
                        </a>
                        
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>

</x-app-layout>

