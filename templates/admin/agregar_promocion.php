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

  ?>

  <!--contenido de la plantilla -->
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <img src="../../src/img/fondo.jpeg" alt="..." class="img-thumbnail">
      </div>
      <div class="col-md-4">
        <form class="row g-3">

          <div class="col-12">
            <div class="x_panel">
              <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate>
                  <label for="fullname">nombre de la promocion * :</label>
                  <input type="text" id="fullname" class="form-control" name="fullname" required />

                  <label for="formFile" class="form-label">subir imagen de la promocion</label>
                  <input class="form-control" type="file" id="formFile">


                  <label>Dias disponibles:</label>
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="checkbox">
                        <label>
                          <!--   <input type="checkbox" class="flat" checked="checked" id="SI_SE"> lunes-->
                          <input type="checkbox" class="flat" id="lunes" value="1"> lunes
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_lunes">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" id="martes" value="2"> martes
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_martes">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" id="miercoles" value="3"> miercoles
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_miercoles">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" id="jueves" value="4"> jueves
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_jueves">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" id="viernes" value="5"> viernes
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_viernes">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat" id="sabado" value="6"> sabado
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_sabado">
                      <div class="checkbox">  
                        <label>
                          <input type="checkbox" class="flat" id="domingo" value="7"> domingo
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_domingo">
                      <div class="checkbox">  
                        <label>
                          <input type="checkbox" class="flat" id="todos" value="8"> toda la semana
                        </label>
                      </div>
                      <input type="hidden" class="form-control" id="id_todos">

                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    Date and Time
                    <form>


                      <div class="input-prepend input-group">
                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                        <input type="text" name="reservation-time" id="reservation-time" class="form-control" value="01/01/2021 - 01/25/2021">
                      </div>


                    </form>
                  </div>

                  <label for="message">Descripcion (20 chars min, 100 max) :</label>
                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

                  <br />
                  <span class="btn btn-primary" id="btn">Agregar Promocion</span>

                </form>
                <!-- end form for validations -->

              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!--contenido de la plantilla -->
  <?php
  include '../componentes/footer.html';
  include '../componentes/scripts.html';
  ?>
  <script src="../../inc/funciones/admin/agregar_promocion.js" type="module"></script>
</body>

</html>