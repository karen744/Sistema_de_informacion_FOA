<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema FOA</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        /* Estilos personalizados */
        body {
            font-family: 'figtree', sans-serif;
            background-color: #3170f9;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        .content {
            text-align: center;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333333;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333333;
        }
        .btni {
            display: inline-block;
            padding: 10px 20px;
            background-color: #04070b;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            position: relative;
            top: -410px; /* Ajusta este valor para cambiar la posición vertical */
            left: 500px;
            
        }
        .btnr {
            display: inline-block;
            padding: 10px 20px;
            background-color: #04070b;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            position: relative;
            top: -410px; /* Ajusta este valor para cambiar la posición vertical */
            left: 500px;
        }
        .btni:hover {
            background-color: #2c455e;
        }
        .btnr:hover {
            background-color: #2c455e;
        }
        .logo-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
            opacity: 0;
            animation: fade-in 1s ease-out forwards;
        }
        .logo-container img {
            margin-right: 10px;
        }
        .logo-container h1 {
            font-size: 24px;
            font-family: 'figtree', sans-serif;
            margin: 0;
            color: #333333;
        }
        
        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="content">
            <style>
                .imagen2{
                  position: center;
                  top: 500px; /* Cambia este valor para ajustar la posición vertical */
                  margin-top: -122px;
                  width: 30%;
                  height: auto;
                }
              </style>
            <img class="imagen2" src="{{ asset('logobie.png') }}" alt="logobie.png" width="200px">

            <h2>Bienvenido al Programa</h2>
            <h2>Promoción de la salud</h2>
            <p>Gracias por utilizar nuestro sistema. Regístrate o inicia sesión para continuar.</p>
            
           
            @if (Route::has('login'))
                <div class="actions">
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn" >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btni">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btnr">Registrarse</a>
                        @endif
                    @endif
                </div>
            @endif
            
        </div>
    </div>
       
       
    </div>
</body>
</html>
