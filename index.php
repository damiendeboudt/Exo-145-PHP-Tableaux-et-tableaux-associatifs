<?php

// Premiere ligne

$fruits = array("Apple", "Banana" "Orange");
echo count($fruits);
echo $fruits[1];

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" =>"37", "Joe" => "43");

echo "<br><br>Ben is " . $age[1] . " years old.<br><br>";


//foreach ($age as $key =>$value) {
  //  echo "la clé est $key el la valeur est $value";
//}

foreach($age  as $x => $y) {
    echo "<br>Key=" .$x . ", Value=" .$y ;
}

sort($age);

//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
;
sort($colors)
rsort($colors);

// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
;

sort($age);





