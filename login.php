
<?php
	session_start();
    include "conexion/base.php";
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sqlusu="SELECT * FROM horarios.saiiut.usuarios u1 where u1.correo = '".$username."' and u1.contrasena2 = '".$password."'";
		$rsusu = odbc_exec( $conn, $sqlusu );

 		if ( !$rsusu ) { 
		echo('Error en la consulta SQL');
		exit();
		 }
		$valid=odbc_fetch_row($rsusu);


		$section = "Consulta";
			if($valid > 0){
				if($section == "Consulta"){
					//$_SESSION['user_id'] = $fetch['user_id'];
					$_SESSION['cve_persona'] = odbc_result($rsusu,"cve_persona");
					header("location: pase.html");
				}
				// echo "Has entrado"; // agregar la siguiente pantalla
			}
			else{
				echo "<script>alert('Tu usuario no esta registrado!')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}

		}
		