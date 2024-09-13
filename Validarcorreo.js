onsubmit = function(e){
    e.preventDefault();
    ok = true;
    if(ok && Correo_electronico.value==""){
        ok=false;
        alert("jjjjj");
        Correo_electronico.focus();
    }
   
}