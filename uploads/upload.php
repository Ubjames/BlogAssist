<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//check is image is actually an image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES[fileToUpload]["tmp_name"]);
        if(check !== false){
            echo " File is an image" . " ". "exension =" . " " . $check["mime"];
            $uploadOk = 1;

        }else{
            echo "file is not an image";
        }
}

?>