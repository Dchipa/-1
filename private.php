<!doctype html>
<html lang="ENG">
<head>
    <title>Upload Your Photo
    </title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles.css">
   
   

</head>
<body>

<!doctype html>
<html lang="ENG">
<head>
    <title>Sign In</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Styles.css">
</head>
<body>


<h1> Upload Your Photo</h1> <br>


<div class="form">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <span>You can upload Your image<br></span>  
          <input type = "file" name = "file" >
          <input type = "submit" value = "Upload" name="submit">   
        </form>
          
          <img src = "<?php print $_SESSION['image']; ?>" alt = "IMG">
  
    </div>
</body>
</br>
<button class="button" onclick="location.href='brbr.php';" name="login" type="submit">LogOut</button>


 
</body>
</html>
