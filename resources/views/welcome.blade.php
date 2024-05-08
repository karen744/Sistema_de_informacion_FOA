<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema FOA</title>
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
</head>
<body>
    <div class="overlay"></div> <!-- Superposición de color -->
    <div class="container">
        <img class="logo" src="{{ asset('logobie.png') }}" alt="Logo">
        <div class="title">Bienvenido al Programa</div>
        <div class="subtitle">Promoción de la salud</div>
        <p>Gracias por utilizar nuestro sistema. Regístrate o inicia sesión para continuar.</p>
        <div>
            @if (Route::has('login'))
                <div class="actions">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Iniciar sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn">Registrarse</a>
                        @endif
                    @endif
                </div>
            @endif
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/PromocionSaludUdeNar" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/promociondelasalud_udenar/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- JavaScript (opcional, para iconos de Font Awesome) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
<style>
    /* Estilos CSS */
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background: url('{{ asset('345.png') }}') no-repeat center center fixed;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Color de superposición */
    }
    .container {
        position: relative;
        z-index: 1; /* Para asegurarse de que el contenido esté por encima de la superposición */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
        color: #FFF; /* Color de texto */
    }
    .logo {
        margin-bottom: 20px;
        width: 150px;
    }
    .title {
        font-size: 36px;
        margin-bottom: 10px;
    }
    .subtitle {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .btn {
        padding: 12px 24px;
        background-color: #04070b;
        color: #FFF;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 18px;
        margin-right: 10px;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #2c455e;
    }
    .social-icons {
        margin-top: 20px;
    }
    .social-icons a {
        margin-right: 10px;
        font-size: 24px;
        color: #FFF;
        text-decoration: none;
        transition: color 0.3s;
    }
    .social-icons a:hover {
        color: #2c455e;
    }
</style>