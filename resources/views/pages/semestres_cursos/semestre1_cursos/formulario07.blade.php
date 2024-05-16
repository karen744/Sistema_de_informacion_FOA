<x-app-layout>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cursos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Semestre 1 - Curso') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <h3>Formulario 07 - Programación Temática</h3>
            <br>
            <h6>Por favor descargue el documento </h6>

            <!-- Botón para descargar el documento por defecto -->
            <div class="card">
            <div class="card-body" onclick="redirigir('{{ route('semestres.semestre1.download', $id) }}')">
                <p class="card-text">Formulario FOA 07.</p>
            </div>
            </div>
            <hr>

            <!-- Formulario para subir un nuevo documento -->
            <div class="card1">
            <form action="{{ route('semestres.semestre1.upload', $id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="formulario_07">Por favor suba el formulario aqui:</label>
                    <br>
                    <br>
                    <input type="file" name="formulario_07" id="formulario_07" class="form-control-file">
                   
                </div>
                <br>
                <button type="submit" class="btn btn-success">Subir Documento</button>
            </form>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
<script>
    function redirigir(url) {
      window.location.href = url;
    }
    </script>
<style>
    .card {
        border-width: 2px;
            border-color: black;
            font-weight: bold;
            font-size: 20px;
            width: 150px;
            height: 100px;
            background-color: rgb(234, 237, 250);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            
    }
    .card1 {
        border-width: 2px;
        width: 450px;
        height: 160px;
        border-color: black;
        padding: 5px;
        padding-bottom: 5px;
    }
    .card:hover {
    background-color: #85a7fe; /* Color amarillo claro */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
</style>
