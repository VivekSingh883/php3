<?php
for ($i = 1; $i <= 10; $i++) {
    echo "$i. Hello World<br>";
}
?>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Square of $i is " . ($i * $i) . "<br>";
}
?>

<?php
$n = (int)readline("Enter a number: ");
for ($i = 1; $i <= $n; $i++) {
    echo "$i<br>";
}
?>

<?php
$n = (int)readline("Enter a number: ");
for ($i = 1; $i <= $n; $i++) {
    echo "Cube of $i is " . ($i * $i * $i) . "<br>";
}
?>

<?php
$number = (int)readline("Enter a number to print its table: ");
for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
}
?>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Fizz Buzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo "$i<br>";
    }
}
?>

<?php
for ($floor = 1; $floor <= 20; $floor++) {
    if ($floor == 13) {
        continue; // Skip floor 13
    }
    echo "Floor $floor<br>";
    sleep(1); // Delay of 1 second
}
?>

