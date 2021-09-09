<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Galeria en PHP y MySQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/1.jpg" alt="">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/2.jpg" alt="">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/3.jpg" alt="">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="imagenes/4.jpg" alt="">
                </a>
            </div>

            <div class="paginacion">
                <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <a href="#" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">&copy; dvdev 2021</p>
    </footer>


</body>

</html>