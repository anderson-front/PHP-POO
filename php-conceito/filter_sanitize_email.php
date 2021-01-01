<?php

$a  = 'anderson.santos.silva@live.com';
$b  = 'bogus -at - example dot org';
$c  = '(anderson.santos.silva@live.com)';

$sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
    echo "This sanitized email address is considered valid.";
} else {
    echo "This (b) sanitized email address is considered invalid.\n";
}

echo '<hr>';


$sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
    echo "This sanitized email address is considered valid.";
} else {
    echo "This (b) sanitized email address is considered invalid.\n";
}

echo '<hr>';

$sanitized_c = filter_var($c, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized_c, FILTER_VALIDATE_EMAIL)) {
    echo "This (c) sanitized email address is considered valid.\n";
    echo "Before: $c\n";
    echo "After:  $sanitized_c\n";    
}

