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
      $createFile = fopen("new.txt","w") or die("File not Found !!");
      $one = "Ibrahim Khan";
      fwrite($createFile, $one);



































?>