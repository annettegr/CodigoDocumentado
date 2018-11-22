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
    <BODY>
            <!-- ETIQUETAS DE CADA CAMPO CON TEXTFIELD PARA INGRESAR NUEVOS DATOS -->
            <H1>FORMULARIO DE INSERCIÓN</H1>
            <FORM ACTION="ControlIn.php" METHOD="POST">
            <LABEL>ID CLIENTE</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="idCliente"/>
            <BR>
            <LABEL>NOMBRE CLIENTE</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="nombre"/>
            <BR>
            <LABEL>EDAD CLIENTE</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="edad"/>
            <BR>
            <LABEL>EMAIL CLIENTE</LABEL>
            <BR>
            <INPUT TYPE="TEXT" NAME="email"/>
            <BR>
            <LABEL>Activo <INPUT TYPE="checkbox" name="estatus" value="1">  </LABEL>
            <BR>

                <!-- botón para enviar -->
            <INPUT TYPE="SUBMIT" VALUE="ENVIAR"/>




            </FORM>



            </BODY>





    </HTML>