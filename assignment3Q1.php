<?php
// Define the file name
$filename = "students.txt";

// Create an array of student names
$students = ["Raju Yadav", "Deevansh Gupta", "Nikhil Kour", "Aayush Singh"];

// Write student names to the file
file_put_contents($filename, implode("\n", $students));

// Read and display the contents of the file
$contents = file_get_contents($filename);
echo nl2br($contents);
?>