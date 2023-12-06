@extends('layout.app')
@section('title', 'Perfil')
@section('titles')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Perfil</li>
@stop

@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Sans:400,700");

        * {
            box-sizing: border-box;
        }

        *:after,
        *:before {
            box-sizing: inherit;
        }

        body {
            margin: 0;
            height: 100vh;
            background-color: #c7c3cc;
            font-family: "Fira Sans", sans-serif;
            transition: all 0.3s ease-in-out;
        }

        .button label {
            background-color: #1a8b36;
            padding: 10px;
            color: white;
            border-radius: 20px;
        }

        .button {
            text-align: center;
        }

        .imagen-input {
            padding: 8px 20px;
            border: 1px solid #AAA;
            border-radius: 3px;
            position: absolute;
            display: none;
        }

        img {
            max-width: 100%;
        }

        /* Contenedor principal */

        .container {
            width: 600px;
            max-width: 100%;
            height: 300px;
            min-height: auto;
            background-color: transparent;
            position: relative;
            top: 25%;
            left: 0%;
            border-radius: 20px;
            -webkit-box-shadow: 1px 1px 16px -3px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 1px 16px -3px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 1px 16px -3px rgba(0, 0, 0, 0.75);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        /* Contenedor principal  */

        .contenedor-frente {
            background-color: #000;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 2fr 1fr;
            transition: transform 0.3s ease-in-out;
            transform: translateY(-200%);
        }

        img.img-jugador {
            grid-column: 1 / 2;
            grid-row: 1 / 3;
            width: 300px;
            height: auto;
            z-index: 400;
            transition: transform 0.3s ease-in;
        }

        .ficha-jugador {
            grid-column: 2 / 3;
            grid-row: 1 / 2;
            color: white;
            padding: 0.5rem;
            z-index: 300;
            transition: transform 0.3s ease-in;
        }

        .ficha-jugador p {
            font-size: 0.8rem;
        }

        /* reverso de la tarjeta */

        .contenedor-reverso {
            width: 100%;
            height: 100%;
            background-image: url(../img/juventus-stadium.jpg);
            border-radius: 20px;
            background-repeat: no-repeat;
            background-size: cover;
            display: grid;
            grid-template-columns: 1fr 1fr;
            transition: transform 0.3s ease-in-out;
            transform: translateY(-100%);
        }

        .contenedor-reverso::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(53, 51, 61, 0.4);
        }

        .datos-jugador {
            display: grid;
            height: 100%;
            grid-column: 2 / 3;
            grid-template-rows: 1fr 2fr 1fr;
            z-index: 200;
            position: relative;
        }

        .datos-jugador h1.nombre {
            color: white;
            text-align: center;
            grid-row: 1 / 2;
        }

        .datos-jugador .datos-breves {
            color: white;
            list-style: none;
            grid-row: 2 / 3;
        }

        .datos-breves li {
            margin: 0.5rem 0;
            font-weight: bold;
            font-size: 1.2rem;
        }

        button.btnFicha {
            text-transform: uppercase;
            background-color: white;
            width: 50%;
            height: 2.5rem;
            margin-left: 25%;
            font-size: 1rem;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            letter-spacing: 5px;
            font-family: "Fira Sans", sans-serif;
            -webkit-box-shadow: 1px 1px 8px -3px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 1px 8px -3px rgba(0, 0, 0, 0.75);
            box-shadow: 1px 1px 8px -3px rgba(0, 0, 0, 0.75);
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.9);
        }

        button:focus {
            outline: none;
        }

        .contenedor-reverso {
            opacity: 1;
        }

        /* Animaciones */

        .arriba-foto,
        .arriba-ficha {
            transform: translateY(0);
        }

        .arriba-contenedor {
            transform: translateY(0);
        }

        .abajo-contenedor {
            transform: translateY(-100%);
            z-index: 600;
        }

        .arriba-reverso {
            transform: translateY(0);
            z-index: 200;
        }

        .oscuro {
            background-color: #111111;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnRegresar = document.getElementById('btnRegreso');
            const fichaJugador = document.querySelector('.ficha-jugador');
            const imgJugador = document.querySelector('.img-jugador');
            const conFrente = document.querySelector('.contenedor-frente');
            const conReverso = document.querySelector('.contenedor-reverso');
            const btnFicha = document.getElementById('btnFicha');
            const body = document.querySelector('body');

            btnFicha.addEventListener('click', (e) => {
                e.preventDefault();
                fichaJugador.classList.add('arriba-ficha');
                imgJugador.classList.add('arriba-ficha');
                conFrente.classList.add('arriba-contenedor');
                conReverso.classList.add('arriba-reverso');
                body.classList.add('oscuro');
            });

            btnRegresar.addEventListener('click', (e) => {
                e.preventDefault();
                fichaJugador.classList.remove('arriba-ficha');
                imgJugador.classList.remove('arriba-ficha');
                conFrente.classList.remove('arriba-contenedor');
                conReverso.classList.add('abajo-contenedor');
                conReverso.classList.remove('arriba-reverso');
                body.classList.remove('oscuro');
            });
        });
    </script>
    <div class="container">

        <div class="contenedor-frente">
            <img src="{{ asset('uploads/temp_user/' . $jugador->img) }}" alt="khedira" class="img-jugador">

            <div class="ficha-jugador">
                <h2 class="titulo-ficha">Ficha Técnica</h2>
                <p>Nació en Stuttgart, Alemania, el 4 de abril de 1987</p>
                <p>Debutó en 2006, en el VFB Stuttgart</p>
                <p>En la temporada 2010/2011 fichó por el Real Madrid C.F</p>
                <p>Ha disputado 3 Copas del mundo con la selección alemana: Sudáfrica 2010, Brasil 2014 y Rusia 2018</p>

                <button class="btnFicha btnRegreso" id="btnRegreso">Regresar</button>
            </div>

        </div>

        <div class="contenedor-reverso">
            <img src="{{ asset('uploads/temp_user/' . $jugador->img)}}" alt="khedira" class="img-jugador">
            <div class="datos-jugador">
                <h1 class="nombre">{{ $jugador->nombre }}</h1>

                <ul class="datos-breves">
                    <li>Equipo: {{ $jugador->equipo->nombre }}</li>
                    <li>Edad: 32 años</li>
                    <li>Nacionalidad: Alemana</li>
                    <li>Posición: {{ $jugador->Posicion }}</li>
                </ul>

                <button class="btnFicha" id="btnFicha">Ficha</button>

            </div>

        </div>

    </div>
    <div class="button">
        <form action="{{ route('editImagen') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="foto" id="foto" accept="image/*" class="imagen-input" />
            <br>
            <label for="foto">Cambiar foto</label>
            <input type="submit" value="Guardar" class="btn btn-success">
        </form>
    </div>

@stop
