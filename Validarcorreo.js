onsubmit = function(e){
    e.preventDefault();
    ok = true;
    if(ok && Correo_electronico.value==""){
        ok=false;
        alert("Escribir correctamente su email");
        Correo_electronico.focus();
    }
   
}