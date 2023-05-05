<?php

// massiv (arrays)

// classic
// associative
// multidimensional

//classic massive

//$arr1 = array(1, 2, 3, 4, 5);
//$arr = [1,
//    1 => "2",
//    2 => "3",
//];

//$var = 123;

//echo $arr1[2];


// associative

//$arr2 = [
//    "kalit" => "qiymat",
//    "meva" => "olma",
//    "car" => "toyota"
//];
//
//$user = array(
//    "name" => "Bexruz",
//    "age" => 90,
//    "region" => "Toshkent"
//);
//
//echo $user["age"];

// multidimensional

//$user = [
//    "name" => "Bexruz",
//    "age" => 90,
//    "region" => "Toshkent",
//    "cars" => [
//        "daewoo" => "matiz",
//        "chevrolet" => "lacetti",
//    ]
//];
//
//print_r($user);
//echo $user["cars"]["daewoo"];


// looplar

// for - code blockimizni necha marta qaytarilishii aniq bilganimizda ishlatamiz
//for ($i = 1; $i <= 15; $i++) {
//    echo $i . " marotaba ishladi" . "\n";
//}

// while block codemizni necha marotaba ishlashi aniq bolmaganda ishlatamiz
//while ($i <= 15){
//    echo $i . " chi loop" . "\n";
//    $i++;
//}

//$i = 1;
//do {
//    echo $i . " chi loop" . "\n";
//    $i++;
//} while ($i <= 15);
//$i = 5;
//while ($i <= 15) {
//    echo $i++;
//}

$arr = [
    0 => "bexruz",
    1 => "ulug'bek",
    2 => "jasurbek",
    3 => "suxrob"
];
//
//echo $arr[0];

foreach ($arr as $key => $value) {
    echo $key . " - " . $value . "\n";
}

$arr = [4, 5, 6, 4, 3, 2, 5, 6, 7, 3, "asdasd"];
//echo count($arr); // massivimizni ichida nechta malumot borligini chiqarib beradi | integer

//if (is_array($arr)) {
//    echo "rost";
//}else{
//    echo "yolg'on";
//}

//echo is_array(3) ? "rost" : "yolg'on" . "\n"; // function argumentiga beradigan malumotimi array type bolsa rost qaytaradi | true or false

//echo in_array("asdasd1",$arr) ? "rost" : "yolg'on";

//echo is_array(3) ? "rost" : "yolg'on" . "\n"; // function argumentiga beradigan malumotimi array type bolsa rost qaytaradi | true or false


//$os = array("Apple", "Banana", "Lemon");
//if (in_array("Apple", $os)) {
//    echo "Yeah. Exist Apple";
//}
//if (!in_array("Buleberry", $os)) {
//    echo "Oh, Don't Exist Blueberry!!!";
//}
//
//$os[3] = "olma";
//echo array_key_exists(3, $os) ? "bor" : "yoq";

