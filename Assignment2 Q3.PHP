<?php 

function isPalindrome($string) {
    // Remove any non-alphanumeric characters and convert the string to lowercase
    $cleanedString = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($string));

    // Check if the cleaned string is equal to its reverse
    return $cleanedString === strrev($cleanedString);
}

// Test the function
$string = "A man, a plan, a canal, panama";
if (isPalindrome($string)) {
    echo "<br> '$string' is a palindrome.";
} else {
    echo "'$string' is not a palindrome.";
}
?>