<?php
if(!empty($_POST['observacion']) || !empty($_FILES['file']['name'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["hard_file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $observacion = $_POST['observacion'];
   
    
    //include database configuration file
    include_once 'conexion.php';
    
    //insert form data in the database
    $insert = $db->query("INSERT seguimiento (observacion,file_name) VALUES ('".$observacion."','".$uploadedFile."')");
    
    echo $insert?'ok':'err';
}
?>