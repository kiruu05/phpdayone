<html>
    <body>
    <?php
    //string operations

    //concatation


    $firstName="aakansha";
    $lastName="kamble";
    $fullName=$firstName."".$lastName;   
    echo "<br> <b> concatation </b> :". $fullname; 

    //string length

    $stringlength = strlen($lastname);
    echo "<br> <b> string length </br> :".$stringlength;
    
    
    //substring extraction

    echo "<br>";
    $str=" Hello,World !";
    echo substr($str,0,5);   //
    
    //case convension

    echo "<br>";
    $text=" hello python";
    echo strtolower($text);  //
    echo strtoupper($text);  //
    echo ucfirst($text);     //
    echo ucwords($text);     //

    //trimming

    echo "<br>";
    $str=" Hello ";
    echo trim($str);        //
    echo trim($str);        //
    echo rtrim($str);       //

    //reverse a string

    echo "<br>";
    $str=" Hello php "; 
    echo strrev($str);      //

    //compares two string

    echo "<br>";
    $str=" Hello,World !";
    echo strcmp("Hello World","Hello India");   //

    $str="Hello World!";
    echo strcasecmp("Hello World","Hello India");   //

    //Arithmetic operations

    echo "<br>";
    $a=15;
    $b=4;
    echo $a+$b;   //
    echo $a-$b;   //
    echo $a*$b;   //
    echo $a/$b;   //
    echo $a%$b;   //

    //Rounds up to the nearest integer
    echo ceil(2.3);   //
    //Rounds down to the nearest integer
    echo floor(5.7);  //
    //Retruns the square root
    echo sqrt(18);    //
    //Generates a random number between $min and $max
    echo rand(3,300);  //
    //checksif a value is numeric or not
    echo is_numeric(24);  //
?>
</body>
</html>