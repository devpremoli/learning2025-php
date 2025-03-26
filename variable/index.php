<?php
// declare and initialize
$name = "Jone Doe"; 
$age = 25;
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Address: The address is $address<br>"; // not declared, hase default value of null, result in an E_WARNING

// safely check before using $address
if (isset($address)) {
    echo "Address: The address is $address<br>";
} else {
    echo "Address is not set<br>";
}
?>
