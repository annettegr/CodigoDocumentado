<HTML>

    <style>
    html, body {
        background-color: 	#a35151;
        color: white;
        font-family: 'Yu Gothic UI Light', normal;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .table {
        background-color: #9f6a58;
        color: white;
        border: 1px solid #e0ccb9;
        border-collapse: separate;
        border-left: 0;
        border-spacing: 0px;
    }

    tr:hover {background-color: #bb968a;}

    th,td{

        padding: 15px;
        text-align: center;
    }

    a{
        color: white;
    }

    a:hover{
        color: wheat;
    }

    a:active{
        color: antiquewhite;
    }
    </style>

    <HEAD></HEAD>
    <TITLE>IMPRESIÓN DE RESULTADOS</TITLE>
     <BODY>
    <?PHP
        //DATOS DE CONEXIÓN
        $servername="localhost";
        $username="root";
        $database="ejemplo";
        $password="";

        //GENERA CONEXIÓN
        $conexion=mysqli_connect($servername,$username, $password, $database);

        //BANDERA PARA COMPROBAR CONEXIÓN
        $banderaconexion=TRUE;

        //COMPRUEBA CONEXION
        if($conexion){
        ECHO "CONEXIÓN EXITOSA";
        ECHO "<BR>";
        }else{

        //SI NO HUBO CONEXIÓN, MANDARÁ MENSAJE DE ERROR Y LA BANDERA CAMBIARÁ A FALSE
        ECHO "CONEXIÓN FALLIDA";
        $banderaconexion=FALSE;
        }

        //VERIFICA SI LA BANDERA DE CONEXIÓN ESTÁ ACTIVA
        if($banderaconexion==TRUE) {
        ECHO "EJECUTANDO CONSULTA <BR>";
        //SI ES EXITOSA, EJECUTARÁ LA CONSULTA
        $query = "SELECT * FROM clientes";
        ECHO $query ."<BR>";
        //EL RESULTADO MANDA A LLAMAR LA CONEXION JUNTO CON EL QUERY
        $resultado = mysqli_query($conexion, $query);
        $banderaconsulta = TRUE;

        //VERIFICA SI ES CORRECTO EL RESULTADO
        if ($resultado = TRUE) {
        ECHO "CONSULTA EJECUTADA CON ÉXITO <BR>";

        } else {
        //SI NO SE EJECUTA CORRECTAMENTE, MANDARÁ MENSAJE DE ERROR Y LA BANDERA CAMBIA A FALSE
        ECHO "CONSULTA FALLIDA";
        $banderaconsulta = FALSE;
        }

        //VERIFICA SI LA BANDERA DE CONSULTA ES EJECUTADA CORRECTAMENTE
        if ($banderaconsulta == TRUE) {
        //CONTARÁ EL NÚMERO DE REGISTROS QUE HAYA
        $num_filas = mysqli_num_rows(mysqli_query($conexion, $query));
        ECHO "IMPRIMIENDO: " . $num_filas . " resultados <br>";
        } else {
        //SI NO ES CORRECTO, NO MANDARÁ NINGÚN RESULTADO
        ECHO "NO SE IMPRIMIRÁN RESULTADO <BR>";

        }
        }
        else{
        //SI NO SE REALIZÓ CORRECTAMENTE LA CONEXIÓN, NO SE EJECUTARÁ LA CONSULTA
        ECHO "<BR> NO SE EJECUTARÁ LA CONSULTA POR FALLA DE CONEXIÓN";
        }


     //IMPRIMIR REGISTROS
    //CAPTURAR CAMPOS DE TABLA
    ECHO "<H1> LISTA DE REGISTROS </H1>";
    ECHO "<TABLE BORDER= 1 class=table>";
    ECHO "<TH>idCliente </TH>";
    ECHO "<TH>nombre </TH>";
    ECHO "<TH>edad </TH>";
    ECHO "<TH>email </TH>";
    ECHO "<TH>estatus </TH>";
    ECHO "<TH>MODIFICAR </TH>";
    ECHO "<TH>ELIMINAR </TH>";

    //GENERAR QUERY Y RESULTADO PARA MANDAR LLAMAR LOS REGISTROS
    $query= "SELECT * FROM clientes";
    $resultado=mysqli_query($conexion, $query);

    //GENERAR VARIABLE PARA INICIAR UN CICLO WHILE
    //VERIFICA SI EL RESULTADO ES CORRECTO, SE IMPRIMIRÁN LOS REGISTROS
        $j=1;
        WHILE($j<=$row= mysqli_fetch_array($resultado, MYSQLI_ASSOC)):

            //SE OBTIENEN LAS FILAS DE LA TABLA
            $idCliente= $row['idCliente'];
            $nombre=$row['nombre'];
            $edad=$row['edad'];
            $email=$row['email'];
            $estatus=$row['estatus'];

            //SE IMPRIMEN LOS REGISTROS

            ECHO "<TR>";
            ECHO "<TD>".$idCliente."</TD>";
            ECHO "<TD>".$nombre."</TD>";
            ECHO "<TD>".$edad." </TD>";
            ECHO "<TD>".$email." </TD>";
            ECHO "<TD>".$estatus." </TD>";
            ECHO "<TD><A HREF='Modificar.php?idCliente=".$idCliente."&nombre=".$nombre."&edad=".$edad."&email=".$email."&estatus=".$estatus."'>MODIFICAR </A> </TD>";
            ECHO "<TD><A HREF='Eliminar.php?idCliente=".$idCliente."'>ELIMINAR</A> </TD>";
            ECHO "</TR>";
        $j++;
        //TERMINA EL CICLO WHILE
        ENDWHILE;
        ECHO "</TABLE>";


        ECHO "<BR>";
        ECHO "<BR>";
        //LINK PARA INGRESAR NUEVO REGISTRO
         ECHO "<A HREF='FormularioIn.php'>INSERTAR NUEVO REGISTRO </A>";

        ?>
        </BODY>
</HTML>