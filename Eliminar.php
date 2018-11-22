<?PHP
    ECHO "MODULO ELIMINAR";
    ECHO "<BR>";

    //OBTIENE ID A ELIMINAR
    $idCliente=$_GET['idCliente'];
    ECHO "idCliente a eliminar ".$idCliente."</BR>";

    //DATOS CONEXIÓN
    $servername="localhost";
    $username="root";
    $password="";
    $database= "ejemplo";

    //GENERA CONEXIÓN
    $conexion=mysqli_connect($servername, $username, $password,$database);

    //BANDERA DE CONEXION PARA COMPROBAR LA MISMA
    $banderaconexion= TRUE;

    //COMPRUEBA CONEXIÓN
    if($conexion){
    ECHO "CONEXIÓN EXITOSA <BR>";
    }else{
    ECHO "CONEXIÓN FALLIDA <BR>";
    $banderaconexion=FALSE;
    }

    //VERIFICA SI LA BANDERA DE CONEXIÓN ES EXITOSA
    if($banderaconexion== TRUE){
    ECHO "EJECUTANDO CONSULTA<BR>";
    //SI ES EXITOSA, SE EJECUTARÁ LA CONSULTA
    $query="DELETE FROM clientes WHERE idCliente=".$idCliente."";
    ECHO $query."<BR>";

    //HACE CONEXION CON LA BASE DE DATOS Y EL QUERY PARA EJECUTARLO Y REDIRIGIR A LA PESTAÑA DESEADA
    $resultado=mysqli_query($conexion, $query);

    //BANDERA DE CONSULTA
    $banderaconsulta=TRUE;

    //VERIFICAR SI EL RESULTADO FUE EJECUTADO CON EXITO
    if($resultado=TRUE){
    ECHO "CONSULTA EJECUTADA CON ÉXITO <BR>";

    }else{
    //SI NO ES EXITOSO, MANDARÁ MENSAJE Y LA BANDERA SERÁ FALSE
    ECHO "CONSULTA FALLIDA<BR>";
    $banderaconsulta=FALSE;
    }

    //VERIFICA SI LA BANDERA DE CONSULTA ESTÁ ACTIVA Y SI ES ASÍ, REDIRIGE A LA PÁGINA DESEADA
    if($banderaconsulta==TRUE){
    ECHO "REDIRIGIENDO PÁGINA POST ELIMINACIÓN <BR>";
        HEADER("Refresh:0 url=http://localhost:300/PRUEBA_KROW/Impresion.php");

    }else{
    //SI NO SE EJECUTÓ CORRECTAMENTE, MANDA MENSAJE DE ERROR
    ECHO "NO SE IMPRIMIRÁN RESULTADO <BR>";
    }

    //SI NO SE REALIZÓ CON ÉXITO LA CONEXIÓN, DEVUELVE ERROR
    }else{
    ECHO "<BR> NO SE EJECUTARÁ LA CONSULTA POR FALLA DE CONEXIÓN";

    }

?>