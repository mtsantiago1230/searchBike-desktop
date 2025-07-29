<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">

    <title>SearchBike-desktop</title>


    <meta name="author" content="Yeiner Javier bejarano">
    <meta name="keywords" content="Registro de bicicletas,bicicletas,mapa calor">

    <html>

    <head>

        <!-- Basic -->

        <title>Tesis</title>
        <meta name="author" content="">
        <meta name="keywords" content="">

        <meta name="description" content="">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Libs CSS -->
        <link href="<?= base_url() ?>plantilla/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url() ?>plantilla/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>plantilla/css/flexslider.css" rel="stylesheet">
        <link href="<?= base_url() ?>plantilla/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?= base_url() ?>plantilla/css/owl.carousel.css" rel="stylesheet">

        <!-- On Scroll Animations -->
        <link href="<?= base_url() ?>plantilla/css/animate.min.css" rel="stylesheet">

        <!-- Template CSS -->
        <link href="<?= base_url() ?>plantilla/css/style.css" rel="stylesheet">

        <!-- Responsive CSS -->
        <link href="<?= base_url() ?>plantilla/css/responsive.css" rel="stylesheet">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?= base_url() ?>plantilla/img/icons/favicon2.png">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    </head>


<body>

    <!-- estilos del nav -->
    <style>
        #menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #menu ul a {
            display: block;
            color: #fff;
            text-decoration: none;
            font-weight: 400;
            font-size: 15px;
            padding: 10px;
            font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        #menu ul li {
            position: relative;
            float: right;
            margin: 0;
            padding: 0;
            padding-right: 37px;
        }

        #menu ul li:hover {
            background: #5b78a7;
        }

        #menu ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 0;
        }

        #menu ul ul li {
            float: none;
            width: 150px
        }

        #menu ul ul a {
            line-height: 120%;
            padding: 10px 15px;
        }

        #menu ul li:hover>ul {
            display: block;
        }
    </style>

    <!-- menu de navegacion -->
    <header>


        <nav id="menu">
            <ul>
                <!-- si la session esta iniciada cargue esas vistas -->
                <?php if ($this->session->userdata('login')) { ?>

                    <li style=" position: relative; float: left; padding-left: 91px;">
                        <a style="padding:0px;" href="<?= base_url() ?>index" s>
                            <img style="width: 144px; background-color: black; " src="/SearchBike/plantilla/img/logo2.png" alt="logo" role="banner">
                        </a>
                    </li>
                    <li style="background-color: black;"><?= anchor('consulta', 'Consulta tu Bici') ?></li>
                    <li style="background-color: black;"><?= anchor('login/datospersonales', 'Datos Personales') ?></li>
                    <li style="background-color: black;"><?= anchor('Reporte', 'Reporte') ?></li>
                    <li style="background-color: black;"><?= anchor('login/logout', 'Cerrar Sesión') ?></li>




                    <!-- si la session No esta iniciada cargue esas vistas-->
                <?php } else { ?>
                    <li style=" position: relative; float: left; padding-left: 91px;">
                        <a style="padding:0px;" href="<?= base_url() ?>index">
                            <img style="width: 144px;" src="/SearchBike/plantilla/img/logo2.png" alt="logo" role="banner">
                        </a>
                    </li>
                    <li><?= anchor('consulta', 'Consulta tu Bici') ?></li>
                    <li><?= anchor('registro', 'Registrate') ?></li>
                    <li><?= anchor('login', "Iniciar Sesión") ?></li>
                    <li><?= anchor('Reporte', 'Reporte') ?></li>

                <?php } ?>
            </ul>
        </nav>
    </header>
    <section class="contenedor">