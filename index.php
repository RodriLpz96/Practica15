<!doctype html>
<html>
<head>
  <title>Pràctica 15</title>
  <meta charset="utf-8"/>
  <SCRIPT>
	function mensaje(){
		alert ("hola mundo JavaScript");
		enviar();
	}
	function enviar(){
	var _nombre=document.getElementById("nom").value;
     var _edad=document.getElementById("ed").value;	
	if(_nombre=="")
		{
			alert("Te falta el nombre");
			return;
		}
	if(_edad=="")
		{
			alert("Te falta la edad");
			return;
		}
     document.getElementById("miForm").submit();		
	}
  </SCRIPT>
</head>
<body>
	<FORM method="POST" action="validacion.php" id="miForm">
	<P>
	NOMBRE: <INPUT TYPE="TEXT" 
	NAME="nombre" ID="nom"/>
	<br/>
	EDAD: <INPUT TYPE="TEXT" 
	NAME="edad" ID="ed"/>
	<br/>
	<INPUT TYPE="BUTTON"
	VALUE="ENVIAR" onclick="mensaje()" />
	</P>
	</FORM>
</body>
</html>