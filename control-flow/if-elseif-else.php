<?php

$is_user = true;
$is_admin = true;
$x = 10;
$y = 20;

if ($is_user)
    echo "<p>Welcome, User!</p>";

// good practice to use curly braces even if its a single statement
if ($is_user) {
    echo "<p>Welcome, User!</p>";
}

// alternate syntax
// else if gives error
if ($is_user):
    echo "<p>Welcome, User!</p>";
elseif ($is_admin):
    echo "<p>Welcome, User!</p>";
else:
    echo "<p>You are not a user</p>";
    echo "<p>Not a user</p>";
endif;

// else if
if ($x > $y) {
    $message = "<p>x is greater than y</p>";
} else if ($x < $y) {
    $message = "<p>x is less than y</p>";
} else {
    $message = "<p>x is equal to y</p>";
}
echo $message;
