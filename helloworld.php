<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo"Hello world!";
echo"This is a comment example";

//scalar types
$name="kiran";  //string
$age=18;      //Integer
$time=14.45;  //Float
$class=true;  //Boolean

//compound types
$student_arr=array("samruddhi","sakshi","sayali");//arrays

class student{       //class
    public $marks;
}
$stud=new student(); //object
$stud->name=90;

//special types
$null_var=null;

echo "<br> string:" , $name;
echo "<br> Integer:" , $age;
echo "<br> float:" , $time;
echo "<br> Boolean:" , $class;
echo "<br> Array:", $student_arr[0];
 
// echo "object:",$stud;
echo"<br> null:",$null_var;
//this is single line comment
/*echo "hello world!"
this is multiline comment
developed for php session*/
?>
</body>
</html>

