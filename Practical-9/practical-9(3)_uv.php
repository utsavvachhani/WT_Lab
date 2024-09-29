<?php
$primes = array();
$is_prime_no = false;

for ($i = 2; $i < 100; $i++) {
    $is_prime_no = true; 

    for ($j = 2; $j <= ($i/2); $j++) {
        if ($i % $j == 0) {
            $is_prime_no = false;
            break;
        }
    }

    if ($is_prime_no) {
        array_push($primes, $i);
    }

    if (count($primes) == 100) {
        break;
    }
}

echo array_sum($primes) . "\n";

?>
