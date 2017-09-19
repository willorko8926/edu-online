<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/materia/MateriaCollector.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ProyectoPhp-Grupo8/admin/materia/Materia.php'; 


 ?>
<html lang='es'>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Educacion Online -User</title>
    <!--  CSS de Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../../js/jquery-example.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link href="../../css/personalizado.css" rel="stylesheet">
    <link href="../../css/starter-template.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../../assets/images/logo_navegador.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <!-- Customyles for our template -->
    <link rel="stylesheet" href="../../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
        <body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="../index.php">
                    <img src="../../assets/images/logo.png" alt="Techro HTML5 template"></a>
            </div>

        <div id="wrapper">

            
            <div id="page-wrapper">
                <div class="container-fluid">

                    <form action="guardar.php" method="post">

                      
                        <div class="form-group">
                            <label for="nombre">NOMBRE</label>
                            <input type="text"class='form-control' id="nombre" name="nombre" placeholder="nombre" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="ayudante_id">ID AYUDANTE</label>
                            <input type="text"class='form-control' id="ayudante_id" name="ayudante_id" placeholder="ID Ayudante" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="alumno_id">ID ALUMNO</label>
                            <input type="text"class='form-control' id="alumno_id" name="alumno_id" placeholder="ID Alumno" rows="6">
                        </div>
                        <div class="form-group">
                            <label for="categoria_id">ID CAEGORIA</label>
                            <input type="text"class='form-control' id="categoria_id" name="categoria_id" placeholder="ID Categoria" rows="6">
                        </div>
                                                
                        <button type="submit" class="btn btn-default">Crear</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
    </body>
    </html>
