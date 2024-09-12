onsubmit = function(e){
    e.preventDefault();
    ok = true;
    if(ok && Correo_electronico.value==""){
        ok=false;
        alert("Debe escribir su Email");
        Correo_electronico.focus();
    }
   
}