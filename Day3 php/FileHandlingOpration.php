<html>
    <body>
        <?php
        //File Handling Operations

        //Create a mew file
        $file = fopen("student.txt","w");
       // fclose($file);
        echo"file has been created";

        //write in new file
        fwrite($file,"Hello student file!!\n this is test file");
        echo"<br> text has been inserted";
        fclose($file);

        //Read a file
        echo "<br>";
        $file_read = fopen("student.txt","r");
        while(!feof($file_read)){
            echo fgets($file_read)."<br>";
        }
        fclose($file_read);

        //Deleting a file)
        if(file_exists("student.txt")){
            unlink("student.txt");
            echo "<br><br> file has been deleted !!";
        }
         else{
            echo "<br><br> file not found";
        }
        ?>
        </body>
        </html>