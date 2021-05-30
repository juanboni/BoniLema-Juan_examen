function muestraselect(str){
    var conexion;
    //si la variable vine vacio no hace nada 
    if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
    }
    //para la conexion asincrona
    if (window.XMLHttpRequest) {
        conexion=new XMLHttpRequest();
    }

    //el resultado de mi conexion asincrona me va a vaciar en elemento id=div
    conexion.onreadystatechange=function(){
        if (conexion.readyState==4 && conexion.status==200) {
            document.getElementById("div").innerHTML=conexion.responseText;
        }
    }
    //
    conexion.open("GET","../../admin/controladores/autores.php?c="+str,true);
    conexion.send();
}