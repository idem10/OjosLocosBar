<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="img/icono.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<style type="text/css">
div{
	margin: 0em 0;
	height: auto;
	text-align:center;
	padding: 10px;
	width: 30%
	border: #066 solid 2px;
	background: #b1b1b1;
}
.borde1{
	border-radius: 30px 30px 0px 0px;
	-moz-border-radius: 30px 30px 0px 0px;
	-webkit-border-radius: 30px 30px 0px 0px;
	border: 5px solid #000000;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	width: 80%;
	margin:0 auto;
	background:url(img/header.jpg);
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.borde2{
	border-radius: 0px 0px 30px 30px;
	-moz-border-radius: 0px 0px 30px 30px;
	-webkit-border-radius: 0px 0px 30px 30px;
	border: 5px solid #000000;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	width: 80%;
	margin:0 auto;
	background:url(img/footer.jpg);
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.contenido{
	border-radius: 0px 0px 0px 0px;
	-moz-border-radius: 0px 0px 0px 0px;
	-webkit-border-radius: 0px 0px 0px 0px;
	border: 5px solid #000000;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	width: 80%;
	margin:0 auto;
	background:url(img/contenido.jpg);
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.barra1{
	border-radius: 0px 0px 0px 0px;
	-moz-border-radius: 0px 0px 0px 0px;
	-webkit-border-radius: 0px 0px 0px 0px;
	border: 5px solid #000000;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	width: 80%;
	margin:0 auto;
	
}
.borde3{
	border-radius: 30px 30px 30px 30px;
	-moz-border-radius: 30px 30px 30px 30px;
	-webkit-border-radius: 30px 30px 30px 30px;
	border: 5px solid #000000;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	
}
.zoom{
	display:block!important;
	-webkit-transition:-webkit-transform 5s ease-out;
	-moz-transition:-moz-transform 5s ease-out;
	-o-transition:-o-transform 5s ease-out;
	-ms-transition:-ms-transform 5s ease-out;
	transition:transform 1s ease-out;
	margin:0 auto;
}
.zoom:hover{
	-moz-transform: scale(2.2);
	-webkit-transform: scale(2.2);
	-o-transform: scale(2.2);
	-ms-transform: scale(2.2);
	transform: scale(2.2);
	margin:0 auto;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
}
.boton {
  background: #666b6e;
  background-image: -webkit-linear-gradient(top, #666b6e, #3987b8);
  background-image: -moz-linear-gradient(top, #666b6e, #3987b8);
  background-image: -ms-linear-gradient(top, #666b6e, #3987b8);
  background-image: -o-linear-gradient(top, #666b6e, #3987b8);
  background-image: linear-gradient(to bottom, #666b6e, #3987b8);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  text-shadow: 1px 1px 3px #6b676b;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  float:right;
}
.boton:hover {
  background: #32393d;
  background-image: -webkit-linear-gradient(top, #32393d, #282c2e);
  background-image: -moz-linear-gradient(top, #32393d, #282c2e);
  background-image: -ms-linear-gradient(top, #32393d, #282c2e);
  background-image: -o-linear-gradient(top, #32393d, #282c2e);
  background-image: linear-gradient(to bottom, #32393d, #282c2e);
  text-decoration: none;

}
.banderas{
	bakgroind: #F30;
	border-radius: 3px 3px 3px 3px;
	color:#FFF;
	margin-left:8px;
	padding: 1px 6px;
	z-index: 999;
	position:absolute;
	display: none; 
}
.banderas_hint:before{
content: "\25C0";
color:#900;
position:absolute;
top:1px;
left:-6px;
}
body {
	background-image: url(img/fondo.jpg) no-repeat fixed center;
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	-webkit-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
	box-shadow: -1px 0px 28px 6px rgba(0,0,0,0.75);
}
</style>
</head>
<body background="img/fondo.jpg" >
<div  class="borde1">
<table  align="center"  width="90%" >
<tr>
<td align="left">
<img src="img/logo.png" />
</td>
<td colspan="3">
</td>
</tr>
</table>
<table align="center" width="100%" class="borde3" >
<tr>
<td bgcolor="#FF9900" class="borde3"><a href="index.php"><img class="zoom" src="img/inicio.png" width="50"  height="20"/></a></td>
<td bgcolor="#FF9900" class="borde3"><a href="menu.php"><img class="zoom" src="img/menu.png" width="55"  height="20"/></a></td>
<td bgcolor="#FF9900" class="borde3"><a href="eventos.php"><img class="zoom" src="img/ventas.png" width="65"  height="20"/></a></td>
<td bgcolor="#FFcc00" class="borde3"><a href="contacto.php"><img class="zoom" src="img/contacto.png" width="75"  height="20"/></a></td>
</tr>
</table>
</div>
<div class="contenido">
<table class="borde3" background="img/barras.jpg" width="100%">
<tr>
<td align="left">
<font color='#CCCCCC' >
<form action="ingresar.php" method="post">
<h2>NOMBRE: <input name="nombre" type="text" class="borde3" size="100" required="required"  />
<p>CORREO:  <input name="correo" type="email" class="borde3" size="50" required="required" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="EJEMPLO ejemplo123@correo.com"/></p>
<p>TELEFONO:<input name="telefono" type="tel" class="borde3" size="10" maxlength="10" required="required"/></p>
<p>CIUDAD:  <input name="ciudad" type="text" class="borde3" size="50" required="required"/></p>
<p>ESTADO:  <input name="estado" type="text" class="borde3" size="50" required="required"/></p>
<p>QUEJAS:  
  <textarea name="quejas" cols="100" rows="5" required="required" class="borde3"></textarea>
</p>
</h2>
<input name="Enviar" type="submit" class="boton" />
</form>
</font>
</td>
</tr>
</table
></div>
<div class="borde2">
<table align="center"  width="90%" >
<tr>
<td></td>
</tr>
</table>
</div>
</body>
</html>