<?php

function conexion()
{
	$servername = "localhost";
	$username = "root";
	$password = "biblioteca";
	$dbname = "biblioteca";
	
	
	return $conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
}



function consulta_cursos()
{
	$resultado = mysqli_query(conexion(),"SELECT * FROM cursos");

	while($row = mysqli_fetch_array($resultado))
	{
		?>
		<option value="<?php echo $nombre_curso=$row['nombre']; ?>"> <?php echo $nombre_curso=$row['nombre']; ?> </option>

		<?php
		 
	}

}

function alumnos_cursos($nombre_curso)
{
	

	
	$result = mysqli_query(conexion(),"SELECT alumnos.nombre_alumnos,alumnos.apellidos,cursos.nombre FROM cursos_alumnos,cursos,alumnos WHERE cursos.nombre='$nombre_curso' AND cursos_alumnos.id_curso=cursos.id AND cursos_alumnos.id_alumno=alumnos.id");
	
	
	
	$alumnos = array(); //creamos un array
	
	while($row = mysqli_fetch_array($result)) 
	{ 
	    
	    $nombre_alumno=$row['nombre_alumnos'];
	    $apellido_alumno=$row['apellidos'];
	    
	    
	
	    $alumnos[] = array('Nombre alumnos'=> $nombre_alumno, 'apellidos'=> $apellido_alumno);
	
	}
	    
	  
	header('Content-type: application/json');
	echo json_encode(array('alumnos'=>$alumnos));
	
	





}


?>
