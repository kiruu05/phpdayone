<html>
    <body>
        <?php
        //arrays indexed
        $fruits= ["banana","apple","cherry","orange"];
        echo "selected fruit :". $fruits[1];

        foreach($fruits as $fruits){
            echo "<br> fruit :". $fruits;
        }

        //associative arrays
        echo "<br>";
        $ages = ["john" => 25,"Raj" => 18,"Alice" => 22];
        echo "<br> selected age :". $ages["Alice"];
        foreach($ages as $name => $age){
            echo "<br>" . $name . "is". $age."years old";

        }
        //multi-dimensional arrays
        echo "<br>";
        $students=[
            ["john",25,false],
            ["raj",18,true],
            ["alice",22,false]
        ];

        echo "<br> student 1 is present in the class:".$students[0][2]; 


        //Array manipulation 

        $classroom=["stuart","ben","rick"];
        foreach($classroom as $student){
            echo "<br> student :". $student;
        }


        //adding elements

        $classroom[] = "alen";
        array_push($classroom,"xavier");
        foreach($classroom as $student){
            echo "<br> student :".$student;
        }

        //updating
        echo "<br>";
        $classroom[2]="raj";
        foreach($classroom as $student){
            echo "<br> student:".$student;
        }

        //counting element
        echo "<br><br>";
        echo "number of element in th array are:".count($classroom);

        //Deleting elements
        unset($classroom[1]);
        echo"<br>";
        print_r($classroom);

        //re-indexing element
        $classroom=array_values($classroom);
        echo"<br>";
        print_r($classroom);
      ?>
    </body>    
</html>