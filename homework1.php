<!--
10, 46, 61, 64, 99-104, 116
-->
<?php
// 10

$x1 = 1.7;
$x2 = 3;

function findSolution($x)
{
    return ($x + 1) ** 2 + 3 * ($x + 1);
}

/*
46
Пользователь вводит три числа. Найти сумму тех чисел, которые делятся на 5. 
Если таких чисел нет, то вывести error.
*/
$arr = [15, 10, 53];
function sumFive($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 5 == 0) {
            $sum += $arr[$i];
        }
    }
    return $sum;
}

// echo sumFive($arr);
/*
61
Дано четырехзначное число. Определите, есть ли одинаковые цифры в нем.
*/

function findNumbFourDuplic(int $n): bool
{
    // 1234

    $a = intdiv($n, 1000);
    $b = intdiv($n, 100) % 10;
    $c = intdiv($n, 10) % 10;
    $d = $n % 10;

    if ($a !== $b && $a !== $c && $a !== $d && $b !== $c && $b !== $d) {
        return false;
    }

    return true;
}

//
//if (findNumbFourDuplic(1234)) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}

/*
64
Дано четырехзначное число. Если оно читается слева направо и 
справа налево одинаково, то вывести yes, иначе no.
*/
function findNumbMirror(int $n): bool
{
    $a = intdiv($n, 1000);
    $b = intdiv($n, 100) % 10;
    $c = intdiv($n, 10) % 10;
    $d = $n % 10;

    return $a == $d && $b == $c;
}

//if (findNumbMirror(1234)) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}

/*
99
Вывести на экран числа от 1000 до 9999 такие, что все цифры различны.
*/
function findNumbDuplic()
{
    for ($n = 1000; $n <= 9999; $n++) {
        $a = $n % 10;
        $b = intdiv($n, 10) % 10;
        $c = intdiv($n, 100) % 10;
        $d = intdiv($n, 1000);

        if ($a !== $b && $a !== $c && $a !== $d && $b !== $c && $b !== $d) {
            echo ($a * 1000 + $b * 100 + $c * 10 + $d) . "<br>";
        }
    }
}


/*
100
Вывести на экран числа от 1000 до 9999 такие, что среди цифр нет цифр 5 и цифры 6.
*/
/*
function findFiveSix(){
    for($n = 1000; $n <= 9999; $n++){
        $a = $n % 10;
        $b = intdiv($n, 10) % 10;
        $c = intdiv($n, 100) % 10;
        $d = intdiv($n, 1000);

        if ($a !== $b !== $c !== $d !== 5 && $a !== $b !== $c !== $d !== 6){
            echo ($a * 1000 + $b * 100 + $c * 10 + $d) . "<br>";
        }
    }
}
*/

/*
101
Вывести все пятизначные числа, которые делятся на 2, у которых средняя цифра 
нечетная, и сумма всех цифр делится на 4.
*/

function findDigitSum(int $n): int
{
    $numbString = (string) $n;
    $digitSum = 0;
    for ($i = 0; $i < strlen($numbString); $i++) {
        $digitSum += (int) $numbString[$i];
    }
    return $digitSum;
}

function task_2_101()
{
    // 1 способ
    for ($a = 1; $a <= 9; $a++) {
        for ($b = 0; $b <= 9; $b++) {
            for ($c = 0; $c <= 9; $c++) {
                for ($d = 0; $d <= 9; $d++) {
                    for ($e = 0; $e <= 9; $e++) {
                        $n = $a * 10000 + $b * 1000 + $c * 100 + $d * 10 + $e;
                        if ($n % 2 == 0 && $c % 2 == 1 && findDigitSum($n) % 4 == 0) {
                            echo $n . '<br>';
                        }
                    }
                }
            }
        }
    }

    // 2 способ
    for ($n = 10000; $n <= 99999; $n++) {
        // 12345
        $c = intdiv($n, 100) % 10;
        if ($n % 2 == 0 && $c % 2 == 1 && findDigitSum($n) % 4 == 0) {
            echo $n . '<br>';
        }
    }
}

/*
102
Вывести на экран числа от 1000 до 9999 такие, что среди цифр есть цифра 3.
*/
function task_2_102()
{
    // 1 способ
    for ($a = 1; $a <= 9; $a++) {
        for ($b = 0; $b <= 9; $b++) {
            for ($c = 0; $c <= 9; $c++) {
                for ($d = 0; $d <= 9; $d++) {
                    if ($a == 3 || $b == 3 || $c == 3 || $d == 3) {
                        echo ($a * 1000 + $b * 100 + $c * 10 + $d) . "<br>";
                    }
                }
            }
        }
    }
    // 2 способ
    for ($n = 1000; $n <= 9999; $n++) {
        $a = $n % 10;
        $b = intdiv($n, 10) % 10;
        $c = intdiv($n, 100) % 10;
        $d = intdiv($n, 1000);
        if ($a == 3 || $b == 3 || $c == 3 || $d == 3) {
            echo $n . "<br>";
        }
    }
}

/*
103
Найдите трехзначные числа, равные сумме кубов своих цифр.
*/

function task_2_103()
{
    for ($n = 100; $n <= 999; $n++) {
        // 123
        $a = intdiv($n, 100);
        $b = intdiv($n, 10) % 10;
        $c = $n % 10;
        if ($n == $a ** 3 + $b ** 3 + $c ** 3) {
            echo $n . '<br>';
        }
    }
}

/*
104
Сколько существует четырехзначных чисел, которые в 600 раз больше суммы своих цифр?
*/


// -------------------------------------------------------------------- //
/*
19
Определить, содержит ли массив данное число x
*/

function isInArray(array $a, int $x): bool
{
//    for ($i = 0; $i < count($a); $i++) {
//        if ($a[$i] == $x) {
//            return true;
//        }
//    }
//
//    return false;

//    return in_array($x, $a);

    foreach ($a as $number) {
        if ($number == $x) {
            return true;
        }
    }

    return false;
}

// echo isInArray([100, 2, 3, 4, 5], 30) ? 'Yes' : 'No';

// 20. Найти количество четных чисел в массиве.
function task_2_20(array $a): int
{
    $count = 0;
    foreach ($a as $number) {
        if ($number % 2 == 0) {
            $count++;
        }
    }

    return $count;
}

//echo task_2_20([1, 4, 3, 6, 7]);

// 38. Дан массив. Найдите два соседних элемента, сумма которых минимальна.
function task_2_38(array $a): void
{
    // $min = $a[0] + $a[1];
    $number1 = $a[0];
    $number2 = $a[1];
    for ($i = 0; $i < count($a) - 1; $i++) {
        if ($a[$i] + $a[$i + 1] < $number1 + $number2 /* $min */) {
            // $min = $a[$i] + $a[$i + 1];
            $number1 = $a[$i];
            $number2 = $a[$i + 1];
        }
    }

    echo 'Мин. сумма: ' . ($number1 + $number2) . '<br>';
    echo $number1 . ', ' . $number2;
}

task_2_38([1, 2, 3, 4, -4, 5]);

?>