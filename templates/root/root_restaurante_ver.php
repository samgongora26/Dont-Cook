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
    include '../componentes/head.html';
    //include '../componentes/navegacion_reducido.html';
    ?>


    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Barra de Imagen -->
    <section class="breadcrumb-section set-bg" data-setbg="../../src/img/fondo.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 id="nombre_restaurante">PikaTako</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Barra de Imagen -->
    <br>

    <!--contenido de la plantilla -->
    <div class="container">
        <div class="row">
            <!--Slider-->
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <!--Logo del restaurante-->
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="../../src/img/restaurants/pikalogodarkmode.png" alt="">
                    </div>
                    <!--Fin logo del restaurante-->

                    <!--Imagenes del restaurante-->
                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="../../src/img/restaurants/1.jpg" src="../../src/img/restaurants/1.jpg" alt="">
                        <img data-imgbigurl="../../src/img/restaurants/2.jpg" src="../../src/img/restaurants/2.jpg" alt="">
                        <img data-imgbigurl="../../src/img/restaurants/3.jpg" src="../../src/img/restaurants/3.jpg" alt="">
                        <img data-imgbigurl="../../src/img/restaurants/4.jpg" src="../../src/img/restaurants/4.jpg" alt="">
                    </div>
                    <!--Fin imagenes del restaurante-->

                </div>
            </div>
            <!--Fin slider-->

            <!--Información del restaurante-->
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h1 id="nombre_restaurante">PikaTako</h1>
                    <!--Area de Calificación-->
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <!--Fin area de calificación-->

                    <p id="descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, vel. Voluptates nulla aut impedit, in commodi sit, eum nam facere laboriosam ut praesentium aperiam nihil ipsam? Est, nemo aut? Tempore.</p>

                    <div class="row mx-auto">

                        <span class="fa fa-facebook btn site-btn mx-auto ml-2"></span>


                        <span class="fa fa-instagram btn site-btn mx-auto ml-2"></span>


                        <span class="fa fa-heart btn site-btn mx-auto ml-2"></span>

                        <span class="fa fa-edit btn site-btn mx-auto ml-2"></span>

                        <button class="btn btn-success btn-sm mr-1"> <span class="fa fa-check"></span></button>
                        <button class="btn btn-danger btn-sm mr-1"> <span class="fa fa-times"></span></button>


                    </div>
                    <br>


                    <!--<ul>
                        <li><img width="40" height="40" src="../../src/img/iconos/facebook.png"> <img width="40" height="40" src="../../src/img/iconos/instagram.png"><img width="40" height="40" src="../../src/img/iconos/galeria.png"></li>
                        
                    </ul>-->
                </div>
            </div>
            <!--Fin información del restaurante-->
        </div>

        <br><br>
        <!--Redes Sociales-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Telefono</h4>
                    <p id="telefono">+01-3-8888-6868</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Dirección</h4>
                    <p id="direccion">60-49 Road 11378 New York</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Horarios</h4>
                    <p id="horarios">10:00 am to 23:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Correo</h4>
                    <p id="correo">hello@colorlib.com</p>
                </div>
            </div>
        </div>
        <!--Fin redes sociales-->

        <!--Sub menu-->
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Promociones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Menús y platillos</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h3>Promociones</h3>
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
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h3>Fotos</h3>
                                <!-- Gallery -->
                                <div class="row mt-3">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                                        <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                                        <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                    </div>
                                </div>
                                <!-- Gallery -->
    
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h3>Agrega tu menú en forma de texto!</h3>
                                <br>
                                <div id="editor">
                                    <p>Agrega tu delicioso menú!</p>
                                    <p>Agrega tu propio diseño!</p>
                                    <p>Rico menú! <strong> $20.00</strong> <em>
                                            <-Empieza a agregar tus deliciosos platillos</em>
                                    </p>
                                    <p><strong>(borra el texto anterior para empezar a escribir tu menú)</strong>...</p>
                                    <p><br></p>
                                </div>
                                <br>
                                <div>
                                    <button type="button" value="contenido" onclick="jssave()" class="btn btn-warning">Guardar Menu!</button>
                                </div>
                                <br>

                                <h3>O si prefieres agrega imagenes de tu menú!</h3>

                                <div class="row mt-3">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-lg-4 ">
                                        <div class="card">
                                            <div class="card-body text-center">

                                                <form action="../../inc/peticiones/admin/upload.php" method="post" enctype="multipart/form-data">
                                                    Select image to upload:
                                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                                    <input type="submit" value="Subir" name="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin Submenu-->

        </div>
        <!--Fin contenido de la plantilla -->

        <br>
        <?php
        include '../componentes/footer.html';
        include '../componentes/scripts.html';
        ?>
</body>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


<!-- Initialize Quill editor-->
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    function jssave() {

        let contenido = quill.container.firstChild.innerHTML;
        fetch("../../inc/peticiones/admin/consultas.php?contenido=" + contenido);
        alert("El menú se a guardado");

    }
</script>

</html>