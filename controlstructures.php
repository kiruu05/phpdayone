<html>
    <body>
        <?php
        //control structure
        $name=" sayali ";
        if($name==" kiran "){
            echo $name."name is correct";
        }
        else{
            echo $name."Name is not correct";
        }


        //conditional statement if and if---else
        $marks= 91;

        if($marks >=80){
            echo "<br> you got Grade A";
        }
        elseif($marks >=60){
            echo "<br> you got Grade B";
        }
        elseif($marks >= 40){
            echo "<br> you got Grade C";
        }
        else{
            echo "<br> you got Grade D";
        }


        //Conditional statement switch
        echo "<br>";
        $day= "sunday";
        switch($day){
            case "sunday":
              echo "Its sunday !!!";
              break;
            case "Monday":
            echo "Its monday !!!";
              break;
            case "Tuesday":
            echo "Its tuesday !!!";
              break;
            case "wednesday":
            echo "Its wednesday !!!";
              break;
            case "thursday":
            echo "Its thursday !!!";
              break;
            default:
            echo "No matching day found !!";
        }


        //Iteratic control structures while loop
        echo "<br>";

        $count = 1;
        while($count <= 10){
            echo "<br> count is ". $count;
            $count++;
        }

        //Interatic control structure do while loop
        echo "<br>";
        $num = 1;
        do{
            echo "<br> do while Number is ". $num;
            $num++;
        }
        while($num <= 3);


        //Interactic control structure for loop 
        echo "<br>";
        for($i=1; $i<3; $i++){
            echo "<br> for loop number :". $i;
        }

        //Interactic control structure foreach loop
        echo "<br>";
        $array = ["red","green","blue","yellow","pink"];
        foreach($array as $color){
            echo "<br> color :".$color;
        }




            
        





        

        ?>
    </body>
</html>
 
