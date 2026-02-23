<?php

// Exercise 1
for($evenNum = 0;  <= 20; $evenNum++) 
{
    if($evenNum % 2 == 0) 
    {
        echo "Numbers: " . $evenNum . '<br>';
    }
}

// Exercise 2
$groceries = ["S", "Bread", "Mango", "Potatoes", "Eggs"];

echo "<br>";
echo "Grocery List:" . '<br><br>';

foreach($groceries as $grocery) {
    echo $grocery . '<br>';
}

echo '<br><br>';

// Exercise 3
$countdown = 10;

while($countdown >= 0) 
{
    echo $countdown . "..." . '<br>';
    $countdown--;

    if($countdown == 0) 
    {
        echo "BLAST OFF!";
        break;
    }
}

?>
