<?php 

$vegetables = scandir("category/vegetables"); 
$fruits = scandir("category/fruits"); 
$berries = scandir("category/berries"); 

echo "Vegetables: ";

foreach ($vegetables as $i) {
    if($i > 1)
    echo $i, "<br>";
}

echo "Fruits: ";

foreach ($fruits as $i) {
    if($i > 1)
    echo $i, "<br>";
}

echo "Berries: ";

foreach ($berries as $i) {
    if($i > 1)
    echo $i, "<br>";
}