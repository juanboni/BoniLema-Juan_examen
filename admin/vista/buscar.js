

function buscarPorAutor
(){
    var nombre = document.getElementById("nombre").value;
    if (nombre == "") {
        document.getElementById("informacion").innerHTML = "";   
    }else{
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("informacion").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../../admin/controladores/buscar.php?nombre="+nombre,true);
        xmlhttp.send();
    }
    return false;
}