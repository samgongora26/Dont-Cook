<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php 
    include '../../templates/componentes/header.html';
    ?>
</head>
<body>
   <?php
   include '../../templates/componentes/head.html';
   include '../../templates/componentes/navegacion.html';
   ?>

<!--contenido de la plantilla -->
    <div class="container">
        <h3>Categorías destacadas</h3>
    </div>
    <!--Todo de home-->
     
     <section class="categories">
        <div class="container">
            <!-- Slider de categorias -->
            <div class="row mb-3">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../../src/img/categories/cat-1.jpg">
                            <h5><a href="#">Fast food</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../../src/img/categories/cat-2.jpg">
                            <h5><a href="#">Taquerías</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../../src/img/categories/cat-3.jpg">
                            <h5><a href="#">Cerca de tí</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../../src/img/categories/cat-4.jpg">
                            <h5><a href="#">Pizzerías</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../../src/img/categories/cat-5.jpg">
                            <h5><a href="#">Carritos de comida</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Fin slider de categorias -->

            <!--RESTAURANTES-->
            <div class="section-title mt-3">
                <h2>Todos los restaurantes</h2>
            </div>
            <div class="row mt-3">
                <!--restaurante 1-->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../src/img/restaurants/pikalogodarkmode.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">pequeña descripción</a></h6>
                            <h5>Restaurante</h5>
                        </div>
                    </div>
                </div>
                <!--restaurante 2-->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../src/img/restaurants/pikalogodarkmode.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">pequeña descripción</a></h6>
                            <h5>Restaurante</h5>
                        </div>
                    </div>
                </div>
                <!--restaurante 3-->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../src/img/restaurants/pikalogodarkmode.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">pequeña descripción</a></h6>
                            <h5>Restaurante</h5>
                        </div>
                    </div>
                </div>
                <!--restaurante 4-->
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../../src/img/restaurants/pikalogodarkmode.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">pequeña descripción</a></h6>
                            <h5>Restaurante</h5>
                        </div>
                    </div>
                </div>

            </div>
            <!--FIN RESTAURANTES-->

            <!--Tarjetas de promociones-->
            <div class="section-title mt-3">
                <h2>Promociones de Hoy!</h2>
            </div>
            <div class="card-columns">
                <!--Tarjeta de Base-->
                <div class="card border-danger">
                    <img class="card-img-top" src="../../src/img/banner/banner-1.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <h6>Nombre de la Promoción</h6>
                    <p class="card-text">Descripción de la promocion... <br>
                        Chelas 2x1 xdxd <br>
                        De Lunes a Jueves <br>
                        Con Horario de 12:00 a 16:00</p>
                    </div>
                    <div class="card-footer bg-danger">
                        <ul class="text-center">
                            <a href="#"><img width="30" height="30"  src="../../src/img/iconos/ubicacion.png"></a>
                            <a href="#"><img width="30" height="30" src="../../src/img/iconos/tripadvisor.png"></a>
                            <a href="#"><img width="30" height="30" src="../../src/img/iconos/facebook.png"></a>
                            <a href="#"><img width="30" height="30" src="../../src/img/iconos/instagram.png"></a>
                            <a href="#"><img width="30" height="30" src="../../src/img/iconos/galeria.png"></a>
                        </ul>
                    </div>
                </div>
                <!--Fin tarjeta de Base-->
                <div class="card">
                    <img class="card-img-top" src="../../src/img/banner/banner-2.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <h6>Nombre de la Promoción</h6>
                    <p class="card-text">Descripción de la promocion... <br>
                        Chelas 2x1 xdxd <br>
                        De Lunes a Jueves <br>
                        Con Horario de 12:00 a 16:00</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../src/img/banner/banner_dc.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <h6>Nombre de la Promoción</h6>
                    <p class="card-text">Descripción de la promocion... <br>
                        Chelas 2x1 xdxd <br>
                        De Lunes a Jueves <br>
                        Con Horario de 12:00 a 16:00</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../src/img/banner/banner_dc2.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <h6>Nombre de la Promoción</h6>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../src/img/banner/banner_dc6.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <h6>Nombre de la Promoción</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo reprehenderit necessitatibus cumque non cupiditate, odio commodi eveniet modi tenetur! Quis rem perspiciatis enim nesciunt deleniti doloremque libero aut quo natus.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="../../src/img/banner/banner_dc4.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Restaurante</h5>
                    <h6>Nombre de la Promoción</h6>
                    <p class="card-text">Descripción de la promocion... <br>
                        Chelas 2x1 xdxd <br>
                        De Lunes a Jueves <br>
                        Con Horario de 12:00 a 16:00</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <!--Fin de tarjetas de promociones-->
        </div>
    </section>
   <!--Fin de todo de home-->

<!--contenido de la plantilla -->
    <?php 
    include '../../templates/componentes/footer.html';
    include '../../templates/componentes/scripts.html';
    ?>
</body>

</html>