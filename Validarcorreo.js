onsubmit = function(e){
    e.preventDefault();
    ok = true;
    if(ok && Correo_electronico.value==""){
        ok=false;
        alert("Escribe correctamente tu email");
        Correo_electronico.focus();
    }
   
}