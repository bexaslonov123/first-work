<?php

// 1 mashq
$users1 = [
    [
        "name" => [
            "firstname" => "Bexruz",
            "lastname" => "aslonov",
        ],
        "age" => 95,
    ],
    [
        "name" => [
            "firstname" => "Jasurjon",
            "lastname" => "Mamatkulov",
        ],
        "age" => 99,
    ],
    [
        "name" => [
            "firstname" => "SHerzod",
            "lastname" => "Alimov",
        ],
        "age" => 90,
    ],
    [
        "name" => [
            "firstname" => "Farrux",
            "lastname" => "Jamshidov",
        ],
        "age" => 89,
    ],
];

// firstname lastname age

//foreach ($users1 as $user) {
//    echo $user['name']['firstname'] . " " . $user['name']['lastname'] . " " . $user['age'] . PHP_EOL;
//}


// 2 mashq
$users2 = [
    [
        "name" => [
            "first_name" => "Bexruz",
            "last_name" => "Aslonov"
        ],
        "age" => 30,
        "films" => [
            "Temir odam",
            "O'rgimchak odam",
            "Qasoskorlar",
            "Korinmas"
        ]
    ],
    [
        "name" => [
            "first_name" => "Ulug'bek",
            "last_name" => "Ibragimov"
        ],
        "age" => 23,
        "films" => [
            "Hacker"
        ]
    ],
    [
        "name" => [
            "first_name" => "Jasurjon",
            "last_name" => "Mamatqulov"
        ],
        "age" => 32,
        "films" => [
            "Godzilla maxluqlar qiroli",
        ]
    ],
    [
        "name" => [
            "first_name" => "Zuxriddin",
            "last_name" => "Azmiddinov"
        ],
        "age" => 30,
        "films" => [
            "Sudya",
            "Cho'qintirgan ota 2",
            "Madagaskar 2"
        ]
    ]
];

// first_name last_name age favourite_films


//$ar = [
//    0 => "qiymat 1",
//    1 => "qiymat 2",
//    2 => "qiymat 3",
//];
//
//$ar[0] = "qiymat 1";
//
//foreach ($users2 as $user) {
//    echo $user['name']['first_name'] . " " . $user['name']['last_name'] . " " . $user['age'] . " yoshda ";
//    $filmsCount = count($user['films']);
//    foreach ($user['films'] as $i => $film) {
//        if ($filmsCount == $i + 1) {
//            echo $film . " ";
//        } else {
//            echo $film . ", ";
//        }
//    }
//    echo "nomli filmlarni yoqtiradi." . PHP_EOL;
//}


// 3 mashq
$users3 = [
    [
        "username" => "Bexruz",
        "password" => "123"
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

// username password

// inputdan malumot sorab olish uchun (terminaldan)
// echo fgets(STDIN);

$login = function () use ($users3): bool {
    echo "Username: ";
    $username = strtolower(trim(fgets(STDIN)));
    echo "Password: ";
    $password = strtolower(trim(fgets(STDIN)));

    foreach ($users3 as $user) {
        if (strtolower($user['username']) == $username && strtolower($user['password']) == $password) {
            return true;
        }
    }
    return false;
};

if ($login()) {
    echo "Login successful" . PHP_EOL;
} else {
    echo "Login failed" . PHP_EOL;
}




