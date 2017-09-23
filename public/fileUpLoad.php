<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileName = $_FILES["fileToUpload"]["name"];

$uploadOk =1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// $imageFileCmp = explode("." , $_FILES["fileToUpload"]["name"]);
// $fileExtension = strtolower(end($imageFileCmp));
// $availableExtension = array("jpg","png");

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo " File is not image";
        $uploadOk = 0;
    }
}

// if(in_array($fileExtension,$availableExtension)) {
//     $uploadOk = 1;
// } else {
//     echo "File is not jpg or png";
//     $uploadOk = 0;
// }

// Check out file existing.
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// if ($_FILES["fileToUload"]["size"] > 500000000) {
//     # code...
//     echo "Sorry, your file is too large";
//     $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Upload image file
if ($uploadOk == 0) {
    echo " Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header( "Location: imageEdit.php?imgName=$fileName" );
        exit ;
        //echo " The file" . basename($_FILES["fileToUpload"]["name"]) . "has been uploaded";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>