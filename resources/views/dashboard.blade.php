<x-app-layout>
  <title>Inicio</title>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Inicio') }}
      </h2>
  </x-slot>


  <div class="card-container">
      <div class="card mb-3">
        <a href="{{ route('docentes') }}"></a>
          <img src="imagenbie4.jpeg" class="card-img" alt="imagenbie4.png" onclick="redirigir('{{ route('docentes') }}')">
          <div class="card-body">
              <h5 class="card-title">Docentes</h5>
              <p class="card-text">Programa de Tecnología en Promoción de la Salud</p>
              <p class="card-text">Si es nuevo en el sistema, por favor registre sus datos</p>
              <p class="card-text"><small class="text-muted">Vincular docentes a cursos</small></p>
              
          </div>
      </div>

      <div class="card mb-3">
          <img src="imagenbie5.jpeg" class="card-img" alt="imagenbie.jpeg" onclick="redirigir1('{{ route('semestres') }}')">
          <div class="card-body">
              <h5 class="card-title">Cursos - Estudiantes</h5>
              <p class="card-text">Programa de Tecnología en Promoción de la Salud</p>
              <p class="card-text"><small class="text-muted">Vincular estudiantes a cursos</small></p>
              <p class="card-text">Subir estudiantes</p>
              
          </div>
      </div>
  </div>
<br>
<br>
  <div style="margin-left: 380px">
    <p>
         Universidad de Nariño 2024
    </p>

  </div>
  <div>
    <img class="logo" src="{{ asset('logoudenar.png') }}" alt="Logo" style="margin-left: 450px; height: 50px;">
</div> 

</x-app-layout>
<script>
    function redirigir(url) {
      window.location.href = url;
    }
    function redirigir1(url) {
        window.location.href = url;
    }
</script>

<style>
      
    .card-container {
        display: flex;
        
        justify-content: center;
        margin-top: 35px;
    }

    .card {
        max-width: 400px;
        margin-right: 30px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        background-color: #f8f9fa;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #343a40;
        margin-bottom: 10px;
    }

    .card-text {
        color: #6c757d;
        margin-bottom: 15px;
    }

    .card-link {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .card-link:hover {
        background-color: #0056b3;
    }
</style>
