<?php
session_start();
    $userdir = $_SESSION["logged_user"];
    $target_dir = "Uploads/";


    
    if (!mkdir($concurrentdir = $target_dir . $userdir) && !is_dir($concurrentdir)){
        throw new \RuntimeExeption(sprintf('Directori "%s" was not created',$concurrentdir));
    }
    $target_file = $target_dir . $userdir . '/' . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = $_FILES["file"]["type"];
    if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["file"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      if ($_FILES["file"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      if($imageFileType !== 'image/jpeg') {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";

      } else {
          if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $_SESSION['image']=$target_file;
                header("Location: private.php");
          } else {
                echo "Sorry, there was an error uploading your file.";
          }
      }
      

    ?>