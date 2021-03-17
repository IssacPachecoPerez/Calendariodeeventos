<?php
$target_dir="img/";
$target_file=$target_dir . basename($_FILES["minuta"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["enviar"])){
    $check=getimagesize($_FILES["minuta"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - " .$check["mime"] . ".";
        $uploadOk=1;
    }else{
        echo "File is not image.";
        $uploadOk=0;
    }
}

if(file_exists($target_file)){
    echo "Sorry, file already exists.";
    $uploadOk=0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "Sorry, only JPG, JPGE, PNG AND GIF files are allowed";
    $uploadOk=0;
}

if($uploadOk==0){
    echo "Sorry, yout file was not uploaded";
}else{
    if(move_uploaded_file($_FILES["minuta"]["tmp_name"], $target_file)){
        echo "The file ".basename($_FILES["minuta"]["name"]). " has been uploaded";
    }else{
        echo "Sorry, there was an error uploading your file";
    }
}