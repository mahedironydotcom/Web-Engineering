<?php
function isPrime($number) {
    // Handle edge cases
    if ($number <= 1) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    
    // Check divisors up to sqrt(number)
    $sqrt = sqrt($number);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Test the function
$testNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 4, 6, 8, 9, 10, 12, 0, 1, -5];

foreach ($testNumbers as $num) {
    echo "$num is " . (isPrime($num) ? "prime" : "not prime") . "\n";
}
?>
