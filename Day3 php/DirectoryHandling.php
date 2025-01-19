<html>
    <body>
    <?php
    //Directory handling operations

    //Create a directory
    if(!is_dir("phpDay3_Directory")){
        mkdir("phpDay3_Directory");
        echo "Directory Created";
     }
     else{
        echo "Directory already exists !";
     }
     echo "<br>";

     //Check if the directory exists
     if(is_dir("phpDay3_Directory")){
        echo "Directory exists";
     }
     else{
        echo"directory does not exists";
     }

     //List the files inside the folder
     $files = scandir("phpDay3_Directory");
     foreach($files as $file){
        echo $file . "<br>";
     }
     echo "<br>";
     //change the directory
     echo "current directory :".getcwd();
     chdir("phpDay3_Directory");
     echo"<br> new current directory : " . getcwd();

     echo "<br>";
     //delete the files inside the directory

     $delete_files = scandir(".");
     foreach($delete_files as $file){
        if($file!=="."&& $file!==".."){
            unlink($file);
        }
        echo "files deleted !";
     }

     echo "<br>";
     //delete directory
     chdir("..");

     echo "<br> current Directory:".getcwd();
     if(is_dir("phpDay3_Directory")){
        rmdir("phpDay3_Directory");
        echo"directory removed";
     }
     else{
        echo"Directory does not exist!";
     }
    ?>
    </body>
    </html>