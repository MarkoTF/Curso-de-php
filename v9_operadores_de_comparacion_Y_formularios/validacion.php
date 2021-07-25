<!--Lo ideal seria que se importe el archivo css-->
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
<?php
  //Comprueba si hemos pulsado en boton de enviar
  if(isset($_POST['enviando'])) {
    //$_POST es para variables superglobales
    $usuario=$_POST["nombre_usuario"]; 
    $edad=$_POST["edad_usuario"]; 

    if($usuario=='Marco' && $edad >= 18) {
      echo '<p class="validado">Puedes entrar</p>';
    } else {
      echo '<p class="no_validado">No puedes entrar</p>';
    }
  }
?>
