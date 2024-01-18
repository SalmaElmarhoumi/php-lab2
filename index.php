<?php
// no.1
echo nl2br("php \n course");

// no.2
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// no.3
$numbers = array(12,45,10,25);
// sum of array
echo "Sum=". array_sum($numbers);
echo "<br>";
// average of array
echo "Average=" . array_sum($numbers) / count($numbers);
echo "<br>";
// Sort array from highest to lowest.
rsort($numbers);
echo $numbers[0] , " " , $numbers[1] , " " , $numbers[2] , " " , $numbers[3];
echo "<br>";

// no.4
$array = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);
// ascending order by value
asort($array);
echo "Sort array in ascending order by value:" ."<br>";
foreach($array as $x=>$x_value)
    {
        echo "Value=" . $x_value;
        echo "<br>";
    }
// ascending order by key
ksort($array);
echo "Sort array in ascending order by key:" ."<br>";
foreach($array as $x=>$x_value)
    {
        echo "Key=" . $x;
        echo "<br>";
    }
// descending order by value
arsort($array);
echo "Sort array in descending order by value:" ."<br>";
foreach($array as $x=>$x_value)
    {
        echo "Value=" . $x_value;
        echo "<br>";
    }
// descending order by key
krsort($array);
echo "Sort array in descending order by key:" ."<br>";
foreach($array as $x=>$x_value)
    {
        echo "Key=" . $x;
        echo "<br>";
    }
?>