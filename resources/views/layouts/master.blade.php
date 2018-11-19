<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bioritmos</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFCECE;
                color: #FF4848;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #FF8A8A;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            p {
                margin: auto;
                width: 50%;
                border: 3px solid red;
                padding: 10px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="content">
                <div class="title m-b-md">
                    Calculador de Biorritmes
                </div>

                <div class="links">
                    <a href="https://es.wikipedia.org/wiki/Biorritmo">¿Que son?</a>
                    <a href="https://es.wikipedia.org/wiki/Biorritmo#Historia">Historia</a>
                    <a href="https://es.wikipedia.org/wiki/Biorritmo#Publicaciones_cient%C3%ADficas">Noticias</a>
                </div>
                <br/>
                <div>
                    <h3>Biorritmes</h3>
                    <p>
                    Esta pagina es para poder calcular el biorritmo de las personas segun su fecha de nacimiento.
                    </p>
                    <br/><br/>
                    <p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/1000px-User_font_awesome.svg.png" width="20%" height="20%" />
                    Adrian Mateo - Alumno de 2ndo de DAM en Santa Anna Mataró.
                    </p>
                    <br/>
                    <p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/1000px-User_font_awesome.svg.png" width="20%" height="20%" />
                    Adrian Mestres - Alumno de 2ndo de DAM en Santa Anna Mataró.
                    </p>
                </div>
                <br/><br/>
                <div>
                    
                    @yield ('content')
                    
                </div>
                <br/>
            
        </div>
    </body>
</html>
