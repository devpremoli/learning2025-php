<?php

$is_admin = true;
$is_user = true;
$can_edit = false;

// good practice to use curly braces even if its a single statement
if ($is_user)
    echo "Welcom, User!\n";

if ($is_admin) {
    echo "Welcome, Admin!\n";
    $can_edit = true;
}


$is_authenticated = false;

if ($is_authenticated) {
    echo "Authenticated!\n";
} else {
    echo "Not Authenticated\n";
}


$x = 10;
$y = 20;

if ($x > $y) {
    $message = "x is greater than y\n";
} elseif ($x < $y) {
    $message = "x is less than y\n";
} else {
    $message = "x is equal to y\n";
}

echo $message;
