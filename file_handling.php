<?php
  //  echo readfile("text.txt"); //file read

    // read file
    /*$ourfile = fopen("text.txt","r") or die("File not found !!");
    echo fread($ourfile, filesize("text.txt"));
    fclose($ourfile);*/

      // first line print
     /* $ourfile = fopen("text.txt","r") or die("File not found !!");
      echo fgets($ourfile, filesize("text.txt"));
      fclose($ourfile);*/

        // first char print
        /*$ourfile = fopen("text.txt","r") or die("File not found !!");
        echo fgetc($ourfile);
        fclose($ourfile);*/

        // read all line
     /* $ourfile = fopen("text.txt","r") or die("File not found !!");
      while(!feof($ourfile)){
        echo fgets($ourfile)."<br>";
      }
      fclose($ourfile);*/



      // Create File
     /* $createFile = fopen("new.txt","w") or die("File not Found !!");
      $one = "Ibrahim Khan";
      fwrite($createFile, $one);*/




      if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($filetmp, "images/".$filename);
        echo "Image upload successfully";
      }





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
      <input type="file" name="image" id="">
      <input type="submit" Value="Submit">
  </form>
</body>
</html>