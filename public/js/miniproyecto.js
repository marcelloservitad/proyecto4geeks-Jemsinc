var visitante= function validacion( nombre,apellido,telefono,correo,
                    celular,cedula){

   this.nombre=nombre;
   this.apellido=apellido;
   this.telefono=telefono;
   this.correo=correo;
   this.celular=celular;
   this.cedula=cedula;
 

}//fin de la clase

var lista_de_visitantes=[];

function validacion(){

   //Declaracion de variables

   var nombre = document.getElementById("nombre");

   var apellido = document.getElementById("apellido");

   var telefono = document.getElementById("telefono");

   var correo = document.getElementById("correo");

   var celular = document.getElementById("celular");

   var contrasena = document.getElementById("contrasena");

   var comprobacion = document.getElementById("comprobacion");

   var cedula = document.getElementById("cedula");

   var genero = document.getElementById("genero");

   //Validacion de espacios vacios
//console.log(nombre.value);
   if(nombre.value=="" ||  apellido.value=="" ||  telefono.value=="" ||  
        correo.value=="" ||  celular.value=="" ||  comprobacion.value=="" ||
        contrasena.value=="" ||  cedula.value==""  ||  genero.value==""){

       alert("Por favor introduzca sus datos completos");

   }//fin del if

   else{

       //Instanciacion del objeto

       var visitantes = new visitante(nombre.value,apellido.value,telefono.value,

           correo.value,celular.value,contrasena.value,

           cedula.value, genero.value);;


       lista_de_visitantes.push(visitante);

       //Almacenando en la lista
       
   }

}



