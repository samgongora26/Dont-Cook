import { enviar_datos, mostrar_ubicacion, mostrar_mensaje } from "../funciones_generales.js";
import {Ubicacion,select_ciudad,btn_confirmar_ciudad} from "../ubicacion.js";

const url = "../../inc/peticiones/restaurantes/funciones.php";
const contenedor = document.querySelector("#contenedor_restaurantes");
const titulo = document.querySelector("#titulo_restaurantes");
const tienes_ciudad = mostrar_ubicacion().ciudad;

//AQUI CARGA SI TIENE UNA CIUDAD REGISTRADA O NO
document.addEventListener("DOMContentLoaded", () => {
  if (!tienes_ciudad) {
    //MUESTRA EL MENSAJE DE QUE NO TIENE UNA CIUDAD
    mostrar_mensaje("sin_ciudad");
    const div_categorias = document.querySelector("#categorias");
    const div_restaurantes = document.querySelector("#contenedor_restaurantes");
    const div_titulo_restaurantes = document.querySelector("#titulo_restaurantes");
    const div_promociones = document.querySelector("#promociones");
    const div_titulo_promociones = document.querySelector("#titulo_promociones");
    //Vacia casi todos los div para mostrar solo el mensaje
    div_categorias.innerHTML = "";
    div_restaurantes.innerHTML = "";
    div_titulo_restaurantes.innerHTML = "";
    div_promociones.innerHTML = "";
    div_titulo_promociones.innerHTML = "";

  }else{
    //BRO, A QUIEN LE TOQUE PROGRAMAR EL HOME AQUI HAY DOS FUNCIONES EN LOS CUALES PUEDES PROGRAMAR
    mostrar_restaurantes();
    mostrar_promociones();
  }      
});

async function mostrar_promociones(){
  //WE, AQUI PON LO DE PROMOCIONES ;V
}

//------------TODOS LOS RESTUARANTES DE LA CIUDAD-----------
async function mostrar_restaurantes() {
  limpiar_contenedor();
  const datos = new FormData();
  const ciudad = mostrar_ubicacion().ciudad;
  datos.append("ciudad", ciudad);
  datos.append("accion", "obtener_restaurantes");
  const res = await enviar_datos(url, datos);
  titulo.innerHTML = `<h2>Todos los restaurantes de ${ciudad}</h2>`;
  res.forEach((restaurante) => {
      console.log(restaurante);
  const {id, nombre, lugar, horario, descripcion, imagen } = restaurante;
  contenedor.innerHTML += `
              <div class="blog-card col-md-12 col-sm-12 col-xs-12 col-lg-5 mx-auto">
                  <div class="meta">
                      <div class="photo" style="background-image: url(../../src/img/restaurantes/${imagen}"></div>
                      <ul class="details">
                          <li class="author"><a href="#">Correo@mail.com</a></li>
                          <li class="tags">
                          <ul>
                              <li><a href="#">Facebook</a></li>
                              <li><a href="#">Instagram</a></li>
                              <li><a href="#">Twitter</a></li>
                          </ul>
                          </li>
                      </ul>
                  </div>
                  <div class="description">
                      <h4>${nombre}</b></h4>
                      <p class=""><small class="text-muted">${descripcion}</small></p>
                          <div class="row">
                              
                          </div>
                      <div class="read-more mt-2">
                          <a href="restaurante_especifico.php?r=${id}" class="btn btn-outline-secondary btn-sm">
                              <span class="fa fa-eye" ></span> Visitar
                          </a>
                      </div>
                  </div>
              </div>
              `;
  });
}

function limpiar_contenedor() {
  contenedor.innerHTML = "";
  titulo.innerHTML = "";
}



/*

document.addEventListener("DOMContentLoaded", () => {
  const ubicacion = new Ubicacion();
  console.log(ubicacion);
  select_ciudad.addEventListener("change", ubicacion.obtener);
  btn_confirmar_ciudad.addEventListener("click", ubicacion.guardar);
  ubicacion.buscar();
  alert(mostrar_ubicacion().ciudad);
});
*/

/* obtener la ubicacion por gps y coompararlo con otras coordenadas
navigator.geolocation.getCurrentPosition(haz_algo,veremos);

function haz_algo(position) {
 const latitude = position.coords.latitude;
 const longitude = position.coords.longitude;
 const latitude_otro = 20.496082883576054;
 const longitude_otro =  -86.93836456398587;
 console.log(`esta la latitud : ${latitude}
              esta es la longitud : ${longitude}`);
 calculo_distania (latitude,longitude,latitude_otro,longitude_otro)
}

function veremos() {
  output.innerHTML = "Unable to retrieve your location";
};

function calculo_distania(lat1,lng1 ,lat2,lng2) {
  let R = 6378137;
  let dLat = degreesToRadians(lat2 - lat1);
  let dLong = degreesToRadians(lng2 - lng1);
  let a = Math.sin(dLat / 2)
          *
          Math.sin(dLat / 2)
          +
          Math.cos(degreesToRadians(lat1))
          *
          Math.cos(degreesToRadians(lat1))
          *
          Math.sin(dLong / 2)
          *
          Math.sin(dLong / 2);

  let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  let distance = R * c;
  console.log(`esta es la distancia entre los 2 puntos ${distance * 0.001}`);
}

function degreesToRadians(degrees){
  return degrees * Math.PI / 180;
}*/
