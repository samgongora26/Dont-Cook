import {enviar_datos, existe_cuenta, mostrar_mensaje} from "../funciones_generales.js";
const url = "../../inc/peticiones/user/funciones.php";
//----------VALIDACION DE CUENTA DE USUARIO-----------
document.addEventListener("DOMContentLoaded", () => {
    mostrarServicios();
});
  //FUNCIONES QUE SE DEBEN DE CARGAR AL INICIO
async function mostrarServicios(){
    var cuenta_activa = false;
    cuenta_activa =  await existe_cuenta();
    //VALIDACION DE UN LOG ANTERIOR
    if (cuenta_activa){
        //EXISTE UNA CUENTA
        console.log("existe una cuenta");
        imprime_user_card();
    }
    else{
        //NO EXISTE UNA CUENTA
        //mostrar el mensaje de no existe una cuenta 
        let mensaje = "sin_cuenta";
        mostrar_mensaje(mensaje);
        console.log("no existe una cuenta");
    }
}

async function imprime_user_card(){
    const datos = new FormData();
    datos.append("accion","user_data");
    const res = await enviar_datos(url, datos);
    console.log(res);
    const {nombres, apellidos, correo, edad, usuario} = res;
    let div_user_card = document.querySelector("#user_card");
    div_user_card.innerHTML= `
        <div class="col-md-6 col-sm-12" id='card'>
            <img alt='user-image' id='userImage' src='https://randomuser.me/api/portraits/men/62.jpg'>
            <br>
            <h4 id='playerName'>${nombres} ${apellidos}</h4>
            <div id='states'>
                <ul class='info'>
                    <li>
                        Correo
                    </li>
                    <li>
                        Edad
                    </li>
                    <li>
                        Ubicación
                    </li> 
                </ul>
                <ul class='values'>
                    <li>${correo}</li>
                    <li>${edad}</li>
                    <li>cancun</li>
                </ul>
            </div>
            <div class=" mx-auto">
                <a href='#' class='btn btn-dark mt-1'>
                    <i class='fa fa-edit'></i>
                    Editar
                </a>
                <a href='../admin/home_admin.php' class='btn btn-dark mt-1'>
                    <i class='fa fa-home'></i>
                    Mis restaurantes
                </a>
                <a href='../../inc/peticiones/login/logout.php' class='btn btn-danger mt-1 mx-auto'>
                    <i class='fa fa-sign-out'></i>
                    Salir
                </a>
                
            </div>
            
        </div>  
    `;
    
}