<?php
    
    session_start();
    $usu=$_SESSION['usuario'];
   

    if(!isset($_SESSION['rol'])){
        header('location: ../Index.php');
    }else{
        if($_SESSION['rol'] != 4){
            header('location: ../Index.php');
        }
    }
$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='../Index.php'>Necesita Hacer Login</a>";
exit;
}
?>

<?php
    
        include("db.php");
        $CON="SELECT * FROM usuarios WHERE '$usu' = USUARIO";
            
            $result = $conexion->query($CON);
            if($result->num_rows>0){
                
                while($row = $result->fetch_assoc()){
                  $usuario=$row['ID_USER'];
                }
            }
        $sql="select * from eventos order by id_evento desc limit 1";
        $resultado=$conexion->query($sql);


        
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
	<link rel="stylesheet" href="css/estilo-panel.css">
	<link rel="stylesheet" href="../css/bootstrap-panel.min.css">

	<link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/AS-Logo.jpg">
</head>
<body> 
<div class="wrapper">
    
    <div class="main_content">
        <div class="header">Subir minuta</div>  
        <div class="info">
          <div>
             <?php
              if($resultado->num_rows>0){
                
              while($row = $resultado->fetch_assoc()){
                  $id=$row['id_evento'];
                  $titulo=$row['titulo'];
                  $inicia=$row['inicio'];
                  $finaliza=$row['fin'];
                  
              ?>
              
              <div class="container">
              <div class="registrar" id="registrar">
		<h1>Información de evento guardado</h1>
		 <form enctype="multipart/form-data" method="post" class="form-horizontal" action="upload-minuta.php">
            <div>
            <label for="">Folio:</label>
            <input  style="border:none;" type="text" name="id" value="<?php echo $id; ?>" size="70" maxlength="70">
            </div>
            <div>
            <label for="">Titulo:</label>
            <input  style="border:none;" type="text" name="nombre" value="<?php echo $titulo; ?>" size="70" maxlength="70">
            </div>
            <div>
            <label for="">Inicio del evento:</label>
            <input  style="border:none;" type="text" name="nombre" value="<?php echo $inicia; ?>" size="70" maxlength="70">
            </div>
            <div>
            <label for="">Fin del evento:</label>
            <input  style="border:none;" type="text" name="nombre" value="<?php echo $finaliza;; ?>" size="70" maxlength="70">
            </div><?php }}?>
            <div>
            <label for="">Subir foto de Minuta:</label>
            <input type="file" accept="image/*" name="minuta">
            </div>
			<input type="submit" value="Subir minuta" name="enviar" >
		</form>
	</div>
              
</div>
      </div>
    </div>
</div>
    </div>
</body>
</html>