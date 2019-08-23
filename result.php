<?php 
include_once("funciones.php");	






if(isset($_POST['nombre_cursos'])) 
{	
	 $nombre_curso = $_POST['nombre_cursos'];
	 alumnos_cursos($nombre_curso);
}
?>	
