<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud de pedido</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

        html{
            font-family: 'Montserrat', sans-serif;
        }

        * {
            margin: 0;
            border: 0;
            box-sizing: border-box;
        }
        header{
            margin: 20px 15px 0 15px;
            height: 13vh;
            background-color: #2C3E50;
            padding: 30px 3%;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #ffffff
        }
        main{
            margin: 0px 15px 0 15px;
        }
        main .tabla table{
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(235, 235, 235, 1);
        overflow: hidden;
        }
        main .tabla table .uno th{
            background-color: rgba(84, 153, 199, .8);
            padding: 1.2rem .5rem;
            font-weight: 600;
            text-align: left;
            font-size: 15px;
            letter-spacing: 1px;
        }
        main .tabla table td{
            font-family: 'Montserrat', sans-serif;
            padding: 1rem .5rem;
            font-weight: 500;
            text-align: left;
            font-size: 13px;
            letter-spacing: 1px;
        }
        main .tabla table tr td:first-child{
            text-align: left;
            font-weight: 600;
        }
        footer {
        background-color: #1C2833;
        margin: 0px 15px 0 15px;
        padding: 35px 3%;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 1px;
        color: #ffffff
        }

        .final{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 0 0 15px;
            padding: 5px 2px;
            font-size: 12px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <header>
        <a>WEIRDO COMICS - Solicitud de pedido</a>
    </header>
    <main>
        <section class="tabla">

            <table>
                <tr class="uno">
                    <th>Producto</th>
                    <th>Stock requerido</th>
                </tr>
                <tr>

                    <td>{{$comic->nombre}} - {{$comic->añoEdicion}} - {{$comic->compania}}</td>
                    <td>{{$cantidad}}</td>

                </tr>

            </table>
        </section>
    </main>
    <footer>
        <a>WEIRDO COMICS agradece su profesionalidad como empresa.</a>
    </footer>
    <div class="final">
        <a>Responsable de solicitud: {{$usuario->nombre}} {{$usuario->apellidoP}} {{$usuario->apellidoM}}</a>
    </div>

</body>
</html>
