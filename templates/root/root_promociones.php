<?php
  include '../../inc/peticiones/login/sesion.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php 
    include '../componentes/header.html';
    ?>
</head>
<body>
   <?php
   include '../componentes/menu_admin.html';
   include '../componentes/sesiones.php';

   ?>
   <!--contenido de la plantilla -->

    <div class="container">
        <!--TODAS LAS PROMOCIONES-->
            <!--Tarjetas de promociones-->
            <div class="section-title mt-3">
                <h2>Todas las promociones</h2>
            </div>
            <div class="card-columns mt-3">
                                    <!--Tarjeta de Base-->
                                    <div class="card ">
                                        <img class="card-img-top" src="../../src/img/banner/banner-1.jpg" alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title">Restaurante</h4>
                                        </div>
                                        <div class="card-body">
                                            <h6>Nombre de la Promoción</h6>
                                            <p class="card-text">Descripción de la promocion... <br>
                                                Chelas 2x1 xdxd <br>
                                                De Lunes a Jueves <br>
                                                Con Horario de 12:00 a 16:00</p>
                                        </div>
                                        <div class="card-footer">
                                            <!--button class="btn btn-dark btn-sm "> <span class="fa fa-eye"></span></button-->
                                            <button class="btn btn-dark btn-sm "> <span class="fa fa-edit"></span></button>
                                            <button class="btn btn-dark btn-sm "> <span class="fa fa-trash"></span></button>
                                        </div>
                                    </div>
                                    <!--Fin tarjeta de Base-->
                                    <!--Tarjeta de Base-->
                                    <div class="card ">
                                        <img class="card-img-top" src="../../src/img/banner/banner-1.jpg" alt="Card image cap">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title">Restaurante</h4>
                                        </div>
                                        <div class="card-body">
                                            <h6>Nombre de la Promoción</h6>
                                            <p class="card-text">Descripción de la promocion... <br>
                                                Chelas 2x1 xdxd <br>
                                                De Lunes a Jueves <br>
                                                Con Horario de 12:00 a 16:00</p>
                                        </div>
                                        <div class="card-footer">
                                            <!--button class="btn btn-dark btn-sm "> <span class="fa fa-eye"></span></button-->
                                            <button class="btn btn-dark btn-sm "> <span class="fa fa-edit"></span></button>
                                            <button class="btn btn-dark btn-sm "> <span class="fa fa-trash"></span></button>
                                        </div>
                                    </div>
                                    <!--Fin tarjeta de Base-->

                                </div>
            <!--Fin de tarjetas de promociones-->

    </div>



<!--contenido de la plantilla -->
    <?php 
        
        include '../componentes/scripts.html';
    ?>
</body>

</html>
