<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>Sistema FOA</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            top: 20px; /* Ajusta este valor para cambiar la posición vertical */
            left: -205px;
            
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
            top: 20px; /* Ajusta este valor para cambiar la posición vertical */
            left: -205px;
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
<body class="antialiased" style="background-image: url('{{ asset('salud-udenar.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0.5)">>
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
            

            <div class="div1" style="margin-right: 600px;">
            <h2 class="titulo" style="font-size: 40px; color: black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Bienvenido al Programa</h2>
            <h2 class="titulo2" style="font-size: 30px; color: black;   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" >Promoción de la salud</h2>
            <p class="parrafo" style="color: rgb(0, 0, 0); font-size: 15px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Gracias por utilizar nuestro sistema. Regístrate o inicia sesión para continuar.</p>
           </div>
            
           <div >
            @if (Route::has('login'))
                <div class="actions" style="margin-right: 200px">
                    
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
        <img class="imagen2" src="{{ asset('logobie.png') }}" alt="logobie.png"  style="margin-left: 400px; margin-top: -290px; opacity: 0.5; width: 410px">
        </div>
                <div class="iconos" style="margin-top: -40px; margin-right: 600px; font-size: 30px">
            <a href="https://www.facebook.com/PromocionSaludUdeNar" target="_blank" class="icono-facebook">
                <i class="fab fa-facebook"></i>
            </a>
            
            <a href="https://www.instagram.com/promociondelasalud_udenar/" target="_blank" class="icono-instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        
    </div>
       
       
    </div>
    <div>

    </div>
</body>
</html>
