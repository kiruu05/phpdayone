<br>
Q2
<?php
echo "<br>";
// Create associative array of cities and populations
$cities = [
    "Landon" => 8674320,
    "USA" => 65332076,
    "Chicago" => 1328590
];

// Find city with highest population
$highestPopulationCity = array_keys($cities, max($cities))[0];

//Print result 
echo "the city with the highest population is : $highestPopulationCity";
?>