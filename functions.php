<html>
    <body>
        <?php

    //functions
     function firstfunction(){
        echo "Hello World !";
     }
     firstfunction();

     //with parameter function
     function greet($name){
        echo"<br> Hello ".$name;
     }
     greet("class");

     //with default parameter function
     function defaultparameter($name = "guest"){
        echo"<br> Hello".$name;
     }
     defaultparameter();
     defaultparameter("defaultparameter!");

     //Function that returns a value
     function multiply($a,$b){
        return $a*$b;
     }
     $result = multiply(8,9);
     echo "<br>".$result;

     //Function by value example
     function addten($num){
        $num += 10;
        echo "<br> function value". $num;
     }
     $x=5;
     addten($x);
     echo "<br> original value:".$x;
     echo "<br>";

     // //Function by refrence example
     function addtanbyrefer(&$num){
        $num += 10;
        echo "<br> function value". $num;
     }
     $y=5;
     addtanbyrefer($y);
     echo "<br> original value:".$y;
     

     //Early returning the value in function(conditional retrun)
     echo "<br>";
     function checkevenodd($num){
        if ($num % 2 ==0){
            return "Even";
        }
        return "odd";
     }
     echo "<br>";
     echo checkevenodd(18);
     echo"<br>";
     echo checkevenodd(15);

  ?>
  </body>
</html>      