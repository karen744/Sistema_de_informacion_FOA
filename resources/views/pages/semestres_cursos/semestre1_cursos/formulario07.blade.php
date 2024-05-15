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
            <h1>Formulario 07</h1>

            <!-- Botón para descargar el documento por defecto -->
            <a href="{{ route('semestres.semestre1.download', $id) }}" class="btn btn-primary">Descargar Documento por Defecto</a>

            <hr>

            <!-- Formulario para subir un nuevo documento -->
            <form action="{{ route('semestres.semestre1.upload', $id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="formulario_07">Subir Documento Nuevo:</label>
                    <input type="file" name="formulario_07" id="formulario_07" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-success">Subir Documento</button>
            </form>
        </div>
    </body>
    </html>
</x-app-layout>
