<?php


    ECHO "ACTUALIZANDO DATOS";
    ECHO "<BR>";

    //SE OBTIENEN LOS DATOS DE LA TABLA
    $idCliente=$_POST["idCliente"];
    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    $email=$_POST["email"];
    $estatus=$_POST["estatus"];

    //SE IMPRIMEN LOS DATOS QUE SE INGRESARON
        ECHO "El id del Cliente es: ".$idCliente."<BR>";
        ECHO "El nombre del Cliente es: ".$nombre."<BR>";
        ECHO "La edad del Cliente es: ".$edad."<BR>";
        ECHO "El email del Cliente es: ".$email."<BR>";
        ECHO "El estatus del Cliente es: ".$estatus."<BR>";

    //DATOS DE CONEXIÓN
    $servername="localhost";
    $username="root";
    $password="";
    $database="ejemplo";

     //SE GENERA LA CONEXION
     $conexion=mysqli_connect($servername, $username, $password, $database);

     //BANDERA DE CONEXION PARA COMPROBAR LA MISMA
     $banderaconexion=TRUE;

    //COMPRUEBA SI LA CONEXIÓN FUE EXITOSA
    if($conexion){
    ECHO "CONEXIÓN EXITOSA";
    ECHO "<BR>";

    }else{
    ECHO "CONEXIÓN FALLIDA";
    //SI NO FUE EXITOSA, DARÁ FALSE
    $banderaconexion=FALSE;
    }

    //BANDERA DE CONSULTA PARA EL QUERY DE INSERCIÓN
    $banderaconsulta=TRUE;

    //VERIFICA SI LA BANDERA DE CONEXION ES EXITOSA
    if($banderaconexion== TRUE){
    ECHO "EJECUTANDO CONSULTA";
    ECHO "<BR>";
    //SI ES EXITOSA, SE EJECUTARÁ LA CONSULTA
    $query = "UPDATE clientes SET nombre='" . $nombre . "', edad='" . $edad . "', email='" . $email . "', estatus='" . $estatus . "' WHERE idCliente= " . $idCliente . "";
    ECHO $query."<BR>";

    }else{
    ECHO "NO SE EJECUTARÁ LA CONSULTA";
    //SI NO FUE EXITOSA, DARÁ FALSE
    $banderaconsulta=FALSE;
    }

    //HACE CONEXION CON LA BASE DE DATOS Y EL QUERY PARA EJECUTARLO Y REDIRIGIR A LA PESTAÑA DESEADA
    $resultado= mysqli_query($conexion, $query);
    if($resultado){
    ECHO "INSERCIÓN EXITOSA </BR>";
    HEADER("Refresh:0 url=http://localhost:300/PRUEBA_KROW/Impresion.php");

    }else {
    //SI NO SE TIENE LA CONEXION A LA BASE DE DATOS O EL QUERY ESTÁ MAL, NO SE INSERTA Y MANDA MENSAJE DE ERROR
    ECHO "INSERCIÓN FALLIDA";
    $banderaconexion= FALSE;

    }


?>

