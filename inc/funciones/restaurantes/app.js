import { enviar_datos, mostrar_ubicacion, mostrar_mensaje } from "../funciones_generales.js";

const url = "../../inc/peticiones/restaurantes/funciones.php";
const contenedor = document.querySelector("#contenedor_restaurantes");
const titulo = document.querySelector("#titulo_restaurantes");
const tienes_ciudad = mostrar_ubicacion().ciudad;

//RECIBE POR GET UNA CATEGORIA
document.addEventListener("DOMContentLoaded", () => {
    const parametrosURL = new URLSearchParams(window.location.search);
    let categoria = parametrosURL.get("c");

    //SI LE PASAMOS UNA CATEGORIA LO BUSCARA
    console.log(categoria); 
    if (categoria) {
        //LE PASAMOS LA CATEGORIA
        if (!tienes_ciudad) {
            sin_ciudad();
        }else{
            mostrar_restaurantes_categoria(categoria);
        }
    }
    //SI NO LE PASAMOS NADA
    else{
        if (!tienes_ciudad) {
            sin_ciudad();
        }else{
            mostrar_restaurantes();
        }
        
    }
});
//si no tiene una ciudad registrada
function sin_ciudad(){
    mostrar_mensaje("sin_ciudad");
    const div_categorias = document.querySelector("#categorias");
    div_categorias.innerHTML = "";
}

//----------------------CATEGORIAS-----------------------------

async function mostrar_restaurantes_categoria(categoria){
    mostar_banner_categoria(categoria);
    console.log("voy a cargar los restaurantes de la categoria: "+categoria);
    
}

async function mostar_banner_categoria(categoria){
    console.log("voy a mostrar el banner de la categoria: "+categoria);
    let banner = document.querySelector("#banner_categoria");
    const BANNERS ={
        'tacos' : ["tacos.png","tacos"],
        'comida_rapida' : ["fast_food.png","Comida rapida"],                           
    }
    const DEFAULT_BANNER = ["fondo.jpeg", "¡Gracias por la idea! pronto estará esta categoría"]; 
    const muestra = BANNERS[categoria] || DEFAULT_BANNER;
    const aver = BANNERS[categoria] ? BANNERS[categoria]: categoria_rara();
    const foto = muestra[0];
    const titulo1 = muestra[1];
    banner.innerHTML = `
        <section class="breadcrumb-section set-bg" data-setbg="../../src/img/categories/${foto}" style="background-image: url(&quot;../../src/img/categories/${foto}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2 id="nombre_restaurante">${titulo1}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    `;
    titulo.innerHTML = ``;
}

function categoria_rara(){
    let banner = document.querySelector("#banner_categoria");
    const foto = "fondo.jpeg";
    const titulo1 = "¡Gracias por la idea! pronto estará esta categoría";
    banner.innerHTML = `
        <section class="breadcrumb-section set-bg" data-setbg="../../src/img/categories/${foto}" style="background-image: url(&quot;../../src/img/categories/${foto}&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2 id="nombre_restaurante">${titulo1}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    `;
    titulo.innerHTML = ``;
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
                        <h5>Abierto / Cerrado</h5>
                        <p class=""><small class="text-muted">${descripcion}</small></p>
                            <div class="row">
                                
                            </div>
                        <div class="read-more mt-2">
                            <button type="button" class="btn btn-outline-secondary btn-sm">
                                <span class="fa fa-heart">
                                </span>
                                Favorito
                            </button>
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


