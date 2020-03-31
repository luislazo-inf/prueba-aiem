<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
    </head>
    <body background="{{ asset('img\orig_29817.jpg') }}"> 
        <ul id="nav">
            <li><a href="listaIngresos">Listado de Ingresos</a></li>
            <li><a href="agregarEgresos">Agregar Egresos</a></li>
            <li><a href="listaEgresos">Listado de Egresos</a></li>
        </ul>
        
        
        <center>
        <h4>Agregar Ingresos</h4>
        <form id="agregarIngresos" method="post" action="{{URL::to('/')}}/agregarIn">
            {{ csrf_field() }}
            <div>
                <p>codigo</p>
                <input type="text" id="codigo" name="codigo">
            </div>
  
            <div>
                <p>descripcion</p>
                <textarea id="descripcion" name="descripcion"></textarea>
            </div>
            
            <div>
                <p>ingresos</p>
                <input type="number" id="ingresos" name="ingresos">
            </div>

            <div>
                <input type="submit" value="Save">
            </div>
        </form>
        </center>
    </body>
</html>
