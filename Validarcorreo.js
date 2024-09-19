onsubmit = function(e){
    e.preventDefault();
    ok = true;
    if(ok && Correo_electronico.value==""){
        ok=false;
        alert("Escribe tu correo:");
        Correo_electronico.focus();
    }
   
}