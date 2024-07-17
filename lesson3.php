<?php

$a = [
    [1, 2, 3],
    [4, 5],
    [9, 10],
    [],
];


$a[2][1] = 999; // 10 изменить на 999


$a[] = [1, 2, 3];
$a[] = 9;
$a[] = 5;

$clients = [
    [
        'name' => 'Petr',
        'email' => 'abc@mail.ru',
        'age' => 23,
    ],
    [
        'name' => 'Ivan',
        'email' => 'abc2@mail.ru',
        'age' => 45,
    ],
    [
        'name' => 'Oleg',
        'email' => 'abc4@mail.ru',
        'age' => 33,
    ],
    [
        'name' => 'Irina',
        'email' => 'abc5@mail.ru',
        'age' => null,
    ],
];

// найти средний возвраст клиентов
// a,b,c  среднее арифметическое: (a+b+c)/3

$sumAge = 0;
$count = 0;
foreach ($clients as $client) {
    if (!is_null($client['age'])) {
        $sumAge += $client['age'];
        $count++;
    }
}
$sumAge /= $count;

// echo 'Средний возраст: ' . round($sumAge, 1) . '<br>';

// Дана строка. Есть ли в ней '!!!'
function task_1(string $s): bool
{
    $result = strpos($s, '!!!');

    if ($result === false) {
        return false;
    }

    return true;
}

// echo task_1('!!!abc!!!abc') ? 'Yes' : 'No';

// Дана строка. Если она длиннее 10 символов,
// то обрезать строку до 7 символов и добавить к ней ...
// aaaaaaaaaaaaaaaaaaaaa -> aaaaaaa...
// aaaaa -> aaaaa

function task_2(string $s): string
{
    if (strlen($s) <= 10) {
        return $s;
    }

    return substr($s, 0, 7) . '...';
}

// echo task_2('abcdeabcdew');

$s = 'abcdedabcdew';

echo substr($s, 3);