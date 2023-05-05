<?php

//function qoshish(int $son1, int $son2, int $son3 = 0): int|string
//{
//    return $son1 + $son2 + $son3;
//}
//
//echo qoshish(1, 5, 10) + 10;


// ozgaruvchilarning yashash doirasi (scope)

//$a = 1;
//$b = 2; // global doira

//function Sum()
//{
//    global $a, $b;
//    $b = $a + $b; // local doira
//}
//Sum();
//$GLOBALS['a'] = 4;
//print_r($GLOBALS['b']);

//$GLOBALS
//$_SERVER
//$_GET
//$_POST
//$_FILES
//$_COOKIE
//$_SESSION
//$_REQUEST
//$_ENV

// anonim funksyalar

//$name = "Bexruz";
//
//$salom = function (&$name) {
//    $name = 123;
//};
//$salom(88);
//
//echo $name;


//$message = 'salom';
//$example = function () use (&$message) {
//};
//
//$example();
//$message = 'мир';
//$example();
//$message = '123';
//$example();
//
//echo $message;


//$y = 1;
//
//$k = 5;
//
//$function1 = fn($x) => $x + $y;
//$fn1 = fn($qiymat) => $qiymat * $k;
//
//// quyidagi kodni anonim function korinishidagi varianti:
//
//$function2 = function ($x) use ($y) {
//    return $x + $y;
//};

// recursive function

//function display($number) {
//    if($number <= 15){
//        echo "$number \n";
//        display($number + 1);
//    }
//}
//display(1);

//function factorial($n)
//{
//    if ($n < 0)
//        return -1; /*Wrong value*/
//    if ($n == 0)
//        return 1; /*Terminating condition*/
//    return ($n * factorial($n - 1));
//}
//
//echo factorial(5);

$arr = [
    "bir",
    2,
    true,
    null
];

//
//$assocArray = [
//    "key"=> "value",
//    "surname" => "Aslonov"
//];
//
//$numbers = [1,4,3,6,8,5,4,34];
//
//// asc va desc
//
//sort($numbers); // qiymatlarini kichkinadan kattaga sortlaydi
//rsort($numbers); // qiymatlarini kattadan kichikka sortlaydi
//asort($numbers); // associative massivlarni qiymatiga qarab kichikdan kattaga sortlaydi
//ksort($numbers); // associative massivlarni kalitlariga qarab kichikdan kattaga sortlaydi
//arsort($numbers); // associative massivlarni qiymatiga qarab kattadan kichikka sortlaydi
//krsort($numbers); // associative massivlarni kalitlariga qarab kichikdan kattaga sortlaydi
//
//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//
//
//usort($numbers, "cmp");
//
//foreach ($numbers as $key => $value) {
//    echo "$key: $value\n";
//}
//print_r($numbers);


//$users = [
//    [
//        "name" => "bexruz",
//        "surname" => "aslonov"
//    ],
//    [
//        "name" => "Ulug'bek",
//        "surname" => "Ibragimov"
//    ],
//    [
//        "name" => "Jasurjon",
//        "surname" => "Mamatqulov"
//    ],
//    [
//        "name" => "Zuxriddin",
//        "surname" => "Azmiddinov"
//    ]
//];
//
//foreach ($users as $user) {
//
////    echo
//
//}

//
//$users = [
//    [
//        "name" => [
//            "first_name" => "Bexruz",
//            "last_name" => "Aslonov"
//        ],
//        "age" => 30,
//        "films" => [
//            "Temir odam",
//            "O'rgimchak odam",
//            "Qasoskorlar",
//            "Korinmas"
//        ]
//    ],
//    [
//        "name" => [
//            "first_name" => "Ulug'bek",
//            "last_name" => "Ibragimov"
//        ],
//        "age" => 23,
//        "films" => [
//            "Hacker",
//            "Kapitan",
//            "Qutqaruvchi"
//        ]
//    ],
//    [
//        "name" => [
//            "first_name" => "Jasurjon",
//            "last_name" => "Mamatqulov"
//        ],
//        "age" => 32,
//        "films" => [
//            "Godzilla maxluqlar qiroli",
//        ]
//    ],
//    [
//        "name" => [
//            "first_name" => "Zuxriddin",
//            "last_name" => "Azmiddinov"
//        ],
//        "age" => 30,
//        "films" => [
//            "Sudya",
//            "Cho'qintirgan ota 2",
//            "Madagaskar 2"
//        ]
//    ]
//];
//
//
//foreach ($users as $user) {
//    $txt = $user['name']['first_name'] . " " . $user['name']['last_name'] . " " . $user['age'] . " yoshda va";
//    $count = count($user['films']);
//    foreach ($user['films'] as $i => $film) {
//        if ($i == $count - 1) {
//            $txt .= " " . $film . " nomli filmlar yoqtiradi.";
//        } else {
//            $txt .= " " . $film . ",";
//        }
//    }
//    echo $txt . "\n";
//};


/*
 *
 * Parse the list of expenses and return the list of triples (date, value, currency).

   Ignore lines starting with #.

   Parse the date using datetime.

   Example expenses_string:

       2016-01-02 -34.01 USD

       2016-01-03 2.59 DKK

       2016-01-03 -2.72 EUR
 *
 */
//function parse_expenses($expenses_string)
//{
//    $expenses = [];
//    $lines = explode("\n", $expenses_string);
//    foreach ($lines as $line) {
//        $parts = explode(" ", $line);
//        $date = new DateTime($parts[0]);
//        $value = floatval($parts[1]);
//        $currency = $parts[2];
//        $expenses[] = [$date, $value, $currency];
//
//    }
//    return $expenses;
//}
//
//$str = <<<TXT
//2022-01-02 -34.01 USD
//2022-01-03 2.59 DKK
//2022-01-03 -2.72 EUR
//TXT;
//
//print_r(parse_expenses($str));
//


$users = [
    [
        "username" => "Bexruz",
        "password" => "aslonov"
    ],
    [
        "username" => "Ulug'bek",
        "password" => "Ibragimov"
    ],
    [
        "username" => "Jasurjon",
        "password" => "Mamatqulov"
    ],
    [
        "username" => "Zuxriddin",
        "password" => "Azmiddinov"
    ]
];


$login = function () use ($users): bool {
    echo "Username: ";
    $username = fgets(STDIN);
    echo "Password: ";
    $password = fgets(STDIN);
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            return true;
        }
    }
    return false;
};

while (!$login()) {
    echo "Login failed" . PHP_EOL . "Try again" . PHP_EOL;
    $login();
}
echo "Login success" . PHP_EOL;