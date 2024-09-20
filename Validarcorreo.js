onsubmit = function(e){
    e.preventDefault();
    ok = true;
    if(ok && Correo_electronico.value==""){
        ok=false;
        alert("Escribe el gmail");
        Correo_electronico.focus();
    }
   
}