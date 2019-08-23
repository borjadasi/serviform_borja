<?php 
include('header.php');
?>
<title>PRACTICA SERVINFORM</title>

<?php include('funciones.php');?>
<div class="container">
	<h2>Web Service JSON</h2>	
	<br><br>	
	
	<form name="formulario" method="post" action="result.php">
   
    Curso: <select name="nombre_cursos">
    	
    	<?php  consulta_cursos(); ?>

    </select>
   
    <input type="submit" value="Enviar">
</form>

</div>
