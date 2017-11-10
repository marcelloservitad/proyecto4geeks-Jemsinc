var correo = document.getElementById("correo").value;

var nombre = document.getElementById("nombre").value;

var apellido = document.getElementById("apellido").value;

var para = document.getElementById("para").value;

var cedula = document.getElementById("cedula").value;

var numero = document.getElementById("numero").value;

var contacto = document.getElementById("contacto").value;

function validacion(){

if(correo !="" && nombre !="" && apellido !="" && para!="" 
  && cedula!="" && numero!="" && contacto !=""){

alert("Tiene espacios vacios") 


} else if ( correo==NaN && nombre == NaN && apellido== NaN 
     && para== NaN && contacto==NaN){


alert("Introduzca sus datos sin numeros")


} else if(/[A-z]+[a-z][a-áéíúó]/.test(nombre) &&  /[A-z]+[a-z][a-áéíúó]/.test(apellido) 
  && /[A-z]+[a-z][a-áéíúó]/.test(para) && /\S+\@\S+\.\S+/.test(correo)){

alert("Introdujo sus datos de manera correcta")



} else {

var myform = $("form#myform");
myform.submit(function(event){
	event.preventDefault();
  var informacion="marcelloservitad@gmail.com"

  // Change to your service ID, or keep using the default service
  var service_id = "default_service";
  var template_id = "template_69GAYEdd";
  myform.find("button").text("Sending...");
  emailjs.sendForm(service_id,template_id,"myform")

  	.then(function(){ 
    	alert("Enviado");
       myform.find("button").text("Send");
    }, function(err) {
       alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
       myform.find("button").text("Send");
    });
  return false;

  alert("Todos sus datos son correctos")
})
}
}

validacion();