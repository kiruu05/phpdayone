Q1
<?php
echo "<br>";
// Initialize the sum variable
$sum = 0;

// Loop through numbers from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    // Check if the number is even
    if ($i % 2 == 0) {
        // Add the even number to the sum
        $sum += $i;
    }
}
//output the result
echo "the sum of all even numbers between1 and 100 is:".$sum;
?>
