<!DOCTYPE html>

<?php
	session_start();
    include "conexion/database.php";
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		$sqlusu="SELECT * FROM horarios.horarios.usuarios u1 where u1.correo = '".$username."' and u1.contrasena2 = '".$password."'";
		$rsusu = odbc_exec( $conn, $sqlusu );
 		if ( !$rsusu ) { 
		echo('Error en la consulta SQL');
		exit();
		 }
		$valid=odbc_fetch_row($rsusu);


		$section = "Consulta";
			if($valid > 0){
				echo "Has entrado"; // agregar la siguiente pantalla
			}else{
				echo "<script>alert('Tu usuario no esta registrado!')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}

		}
		$conn->close();

</html>