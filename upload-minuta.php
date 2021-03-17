<?php
include("db.php");
$id=$_POST['id'];
 if(isset($_POST['enviar'])){
    if(isset($_FILES['minuta']['name']) && !empty($_FILES['minuta']['name']))
        {
            $minuta=$_FILES['minuta']['name'];


        $sql="UPDATE eventos SET foto='$minuta' WHERE id_evento='$id'";
        $resultado=$conexion->query($sql);

        if($resultado){
            include("upload.php");
        
            echo "<script>
                alert('Minuta subida con exito');
                window.location= 'eventos.php'
                    </script>";
    }else{
        echo "Minuta no subida";
    }
}else{
        echo "error al capturar minuta";
    }
}else{
    echo "error general";
}