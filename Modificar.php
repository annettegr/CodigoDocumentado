<?php
ECHO "MÓDULO MODIFICAR";
ECHO "<BR>";

    //CAPTURAR DATOS DE LA TABLA
    $idCliente=$_GET["idCliente"];
    $nombre=$_GET["nombre"];
    $edad=$_GET["edad"];
    $email=$_GET["email"];
    $estatus=$_GET["estatus"];

    //IMPRESIÓN DEL ID A MODIFICAR
    ECHO "idCliente a modificar: ".$idCliente."</BR>";
?>

<HTML>
    <!-- ESTILOS -->
    <style>
    html, body {
        background-color: 	#a35151;
        color: white;
        font-family: 'Yu Gothic UI Light', normal;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
    </style>
    <HEAD> </HEAD>
    <TITLE> </TITLE>

    <BODY>

        <H1>MODIFICAR</H1>
        <FORM ACTION="ControlMod.php" METHOD="POST">

            <!-- ETIQUETAS DE CADA CAMPO CON TEXTFIELD PARA INGRESAR NUEVOS DATOS -->
            <LABEL>idCliente</LABEL> <BR>
            <INPUT TYPE="TEXT" NAME="idCliente" VALUE=<?PHP ECHO "".$idCliente.""?> READONLY= "READONLY"/>
            <BR>

            <LABEL>nombre</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="nombre" VALUE=<?PHP ECHO  "".$nombre.""?> ENABLED />
            <BR>
            <LABEL>edad</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="edad" VALUE=<?PHP ECHO "".$edad.""?> ENABLED />
            <BR>
            <LABEL>email</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="email" VALUE=<?PHP ECHO "".$email.""?> ENABLED />
            <BR>
            <LABEL>Activo <INPUT TYPE="checkbox" name="estatus" value="1">  </LABEL>
            <BR>


             <INPUT TYPE="SUBMIT" VALUE="ENVIAR" />
    </FORM>


    </BODY>
        </HTML>
