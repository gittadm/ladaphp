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
function sumFive(array $arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 5 == 0) {
            $sum += $arr[$i];
        }
    }
    return $sum;
}

//echo sumFive([15, 10, 53]);

/*
61
Дано четырехзначное число. Определите, есть ли одинаковые цифры в нем.
*/

function findNumbFourDuplic(int $n)
{
    $a = intdiv($n, 1000) % 10;
    $b = intdiv($n, 100) % 10;
    $c = intdiv($n, 10) % 10;
    $d = $n % 10;
    if ($a !== $b && $a !== $c && $a !== $d && $b !== $c && $b !== $d) {
        return false;
    }

    return true;
}

//echo findNumbFourDuplic(8331);

/*
64
Дано четырехзначное число. Если оно читается слева направо и 
справа налево одинаково, то вывести yes, иначе no.
*/
function findNumbMirror(int $n)
{
    $a = intdiv($n, 1000) % 10;
    $b = intdiv($n, 100) % 10;
    $c = intdiv($n, 10) % 10;
    $d = $n % 10;
    if ($a == $d && $b == $c) {
        return true;
    }

    return false;
}

//echo findNumbMirror(4554);
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

        if ($a !== $b && $a !== $c && $a !== $d && $b !== $c && $b !== $d && $c !== $d) {
            echo ($a * 1000 + $b * 100 + $c * 10 + $d) . "<br>";
        }
    }
}

//findNumbDuplic();
/*
100
Вывести на экран числа от 1000 до 9999 такие, что среди цифр нет цифр 5 и цифры 6.
*/

function findFiveSix()
{
    for ($n = 1000; $n <= 9999; $n++) {
        $a = $n % 10;
        $b = intdiv($n, 10) % 10;
        $c = intdiv($n, 100) % 10;
        $d = intdiv($n, 1000);

        if ($a !== 5 && $b !== 5 && $c !== 5 && $d !== 5 && $a !== 6 && $b !== 6 && $c !== 6 && $d !== 6) {
            echo ($a * 1000 + $b * 100 + $c * 10 + $d) . "<br>";
        }
    }
}

//findFiveSix();

/*
101
Вывести все пятизначные числа, которые делятся на 2, у которых средняя цифра 
нечетная, и сумма всех цифр делится на 4. Материал сайта www.itmathrepetitor.ru
*/

function findDigitSum(int $n)
{
    $numbString = (string) $n;

    $digitSum = 0;
    for ($i = 0; $i < strlen($numbString); $i++) {
        $digitSum += (int) $numbString[$i];
    }
}

function findNumbFive()
{
    for ($n = 10000; $a <= 99999; $n++) {
        $c = intdiv($n, 100) % 10;
        if ($m % 2 == 0 && $c % 2 == 1 && findDigitSum($n) % 4 == 0) {
            echo $n . "<br>";
        }
    }
}

//findNumbFive();

/*
102
Вывести на экран числа от 1000 до 9999 такие, что среди цифр есть цифра 3.
*/
function findThree()
{
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
}

//findThree();

/*
103
Найдите трехзначные числа, равные сумме кубов своих цифр.
*/
function findSqrt()
{
    for ($n = 100; $n <= 999; $n++) {
        $a = intdiv($n, 100) % 10;
        $b = intdiv($n, 10) % 10;
        $c = $n % 10;
        if ($n == $a ** 3 + $b ** 3 + $c ** 3) {
            echo $n . "<br>";
        }
    }
}

//findSqrt();

/*
104
Сколько существует четырехзначных чисел, которые в 600 раз больше суммы своих цифр?
*/
function findSixHundr()
{
    for ($n = 1000; $n <= 9999; $n++) {
        $a = intdiv($n, 1000) % 10;
        $b = intdiv($n, 100) % 10;
        $c = intdiv($n, 10) % 10;
        $d = $n % 10;
        if ($n > ($a + $b + $c + $d) * 600) {
            echo $n . "<br>";
        }
    }
}

//findSixHundr();

// -------------------------------------------------------------------- //
/*
19-25, 38, 42, 44, 52, 57, 71
20
Найти количество четных чисел в массиве.
*/
function countTwoNumbs(array $a)
{
    $count = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] % 2 == 0) {
            $count++;
        }
    }

    echo $count;
}

//countTwoNumbs([2, 56, 23, 9, 2, 11]);

/*
21
Найти количество чисел в массиве, которые делятся на 3, но не делятся на 7.
*/
function countThreeNotSeven(array $a)
{
    $count = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] % 3 == 0 && $a[$i] % 7 == 1) {
            $count++;
        }
    }

    echo $count;
}

//countThreeNotSeven([2, 56, 23, 9, 2, 11]);

/*
22
Определите, каких чисел в массиве больше: которые делятся на первый элемент
массива или которые делятся на последний элемент массива.
*/
function task3_22(array $a)
{
    $count1 = 0;
    $count2 = 0;

    for ($i = 0; $i < count($a) - 1; $i++) {
        if ($a[$i] % $a[0] == 0) {
            $count1++;
        }
        if ($a[$i] % count($a) - 1 == 0) {
            $count2++;
        }
    }

    echo $count1 . " " . $count2 . "<br>";
}

//task3_22([2, 56, 23, 9, 2, 11]);

/*
23
Найдите сумму и произведение элементов массива.
*/
function task3_23(array $a)
{
    $sum = 0;
    $multip = 1;
    for ($i = 0; $i < count($a); $i++) {
        $sum += $a[$i];
        $multip *= $a[$i];
    }

    return $sum . " " . $multip . "<br>";
}

//echo task3_23([2, 56, 23, 9, 2, 11]);

/*
24
Найдите сумму четных чисел массива.
*/
function task3_24(array $a)
{
    $sum = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] % 2 == 0) {
            $sum += $a[$i];
        }
    }

    return $sum . "<br>";
}

//echo task3_24([2, 5, 6, 23, 9, 2, 11]);

/*
25
Найдите сумму нечетных чисел массива, которые не превосходят 11.
*/
function task3_25(array $a)
{
    $sum = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] % 2 == 1 && $a[$i] < 11) {
            $sum += $a[$i];
        }
    }

    return $sum . "<br>";
}

//echo task3_25([2, 5, 6, 23, 9, 2, 11]);

/*
38
Дан массив. Найдите два соседних элемента, сумма которых минимальна.
*/
function task3_38(array $a)
{
    $numb1 = $a[0];
    $numb2 = $a[1];

    for ($i = 0; $i < count($a) - 1; $i++) {
        if ($a[$i] + $a[$i + 1] < $numb1 + $numb2) {
            $numb1 = $a[$i];
            $numb2 = $a[$i + 1];
        }
    }

    echo $numb1 . $numb2 . "<br>";
}

//task3_38([10, -10, 2, 50, -60, 1, 7]);

/*
42
Проверьте, содержит ли данный массив из n чисел, все числа от 1 до n.
*/
function task3_42(array $a): bool
{
    // n = 4
    // [1, 4, 3, 2] - да
    // [1, 1, 3, 2] - нет
    // [1, 4, 3, 8] - нет

    $n = count($a);
    $isAllInArray = true;

    for ($k = 1; $k <= $n; $k++) {
        if (!in_array($k, $a)) {
            $isAllInArray = false;
            break;
        }
    }

    return $isAllInArray;
}

//echo task3_42([10, -10, 2, 50, -60, 1, 7], 30);

/*
44
Проверьте, является ли данный массив возрастающим или убывающим.
*/

function task3_44(array $a): bool
{
    $isAscending = true; // массив возрастающим
    $isDesc = true; // массив убывающий

    for ($i = 0; $i < count($a) - 1; $i++) {
        if ($a[$i] >= $a[$i + 1]) {
            $isAscending = false;
        }
        if ($a[$i] <= $a[$i + 1]) {
            $isDesc = false;
        }
    }

    return $isAscending || $isDesc;
}

//$arr1 = [1, 2, 3, 4, 5];
//if (task3_44($arr1)) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}

/*
52
Определите, есть ли в массиве повторяющиеся элементы.
*/
function findNumbArrDuplic(array $a): bool
{
    for ($i = 0; $i < count($a); $i++) {
        for ($j = $i + 1; $j < count($a); $j++) {
            if ($a[$i] == $a[$j]) {
                return true;
            }
        }
    }

    return false;
}

echo (findNumbArrDuplic([5, 5, 30, 50, 10, 1, 9]) ? 'yes' : 'no'). "<br>";

/*
57
Дан массив. Заменить все числа, меньшие последнего элемента массива, на первый элемент.
*/
function replaceNumbArr(array $a)
{
    $last = $a[count($a) - 1];
    $first = $a[0];
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] < $last) {
            $a[$i] = $first;
        }
    }

    return $a;
}

$newArr = replaceNumbArr([10, 20, 2, 50, 6, 1, 7]);
// echo "Измененный массив: " . implode(", ", $newArr) . "<br>";

/*
71
Даны два массива. Определите, существуют ли в первом массиве такие два элемента, 
что их сумма равна сумме каких-либо трех элементов второго массива.
*/
function findPairSumArr(array $arr1, array $arr2)
{
    if (empty($arr1) || empty($arr2)) {
        return false;
    }

    for ($i = 0; $i < count($arr1); $i++) {
        for ($j = $i + 1; $j < count($arr1); $j++) {
            $sum1 = $arr1[$i] + $arr1[$j];
            for ($k = 0; $k < count($arr2); $k++) {
                for ($l = $k + 1; $l < count($arr2); $l++) {
                    for ($m = $l + 1; $m < count($arr2); $m++) {
                        $sum2 = $arr2[$k] + $arr2[$l] + $arr2[$m];
                        if ($sum1 === $sum2) {
                            return true;
                        }
                    }
                }
            }
        }
    }

    return false;
}

$arr1 = [1, 2, 3, 5];
$arr2 = [5, 1, 7, 2, 9];

//if (findPairSumArr($arr1, $arr2)) {
//    echo "Существуют две пары элементов с равными суммами";
//} else {
//    echo "Не существует двух пар элементов с равными суммами";
//}
