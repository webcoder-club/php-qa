<?php

// Переменные
$testVar = 132;

define('testVar', false);

// Типы переменных

// Простые типы

# boolean
echo PHP_EOL, PHP_EOL;
var_dump("BOOLEAN");

$foo = TRUE;
$bar = faLse;

var_dump("Переменные:");
var_dump($foo, $bar);

define('FOO', False);
define('BAR', True);

var_dump("Константы:");
var_dump(FOO, BAR);

echo PHP_EOL;
var_dump("В управляющих конструкциях");

$controller = true;
if ('User' === $controller) {
    var_dump("'User' == $controller");
}

if ('User') {
    var_dump("'User'");
}

if (1) {
    var_dump('Приведение типов: int -> bool');
}

while (true) {
    var_dump("while (true) {");
    break;
}

echo PHP_EOL;
var_dump("Приведение типов");

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)


# integer
echo PHP_EOL, PHP_EOL;
var_dump("INTEGER");

$a = 1234; // десятичное число
$b = 0123; // восьмеричное число (эквивалентно 83 в десятичной системе)
$c = 0x1A; // шестнадцатеричное число (эквивалентно 26 в десятичной системе)
$d = 0b11111111; // двоичное число (эквивалентно 255 в десятичной системе)

echo PHP_EOL;
var_dump("Переполнение int-а");

$largeNumber = 9223372036854775807;
var_dump($largeNumber);

$largeNumber = 9223372036854775808;
var_dump($largeNumber);

echo PHP_EOL;
var_dump("Приведение типов");

var_dump((int) "");         // int(0)
var_dump((int) "sdfsf");    // int(0)
var_dump((int) "w234sdf");   // int(234)
var_dump((int) "00343sdf"); // int(343)
var_dump((int) TRUE);       // int(1)
var_dump((int) FALSE);      // int(0)
var_dump((int) 123.34);     // int(123)

# float
echo PHP_EOL, PHP_EOL;
var_dump("FLOAT");

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;

echo PHP_EOL;
var_dump("Сравнение float-ов");

$a       = 1.23456789;
$b       = 1.23456780;
$epsilon = 0.00001;
if (abs($a - $b) < $epsilon) {
    var_dump("abs($a - $b) < $epsilon => TRUE");
}

echo PHP_EOL;
var_dump("NaN");
$nan = acos(8);
var_dump($nan, is_nan($nan));

echo PHP_EOL;
var_dump("INF");
$inf = 123/0;
var_dump($inf, is_infinite($inf));

echo PHP_EOL;
var_dump("Приведение типов");

var_dump((float) "");          // float(0)
var_dump((float) "sdfsf");     // float(0)
var_dump((float) "234.45sdf"); // float(234.45)
var_dump((float) "00.343sd");  // float(0.343)
var_dump((float) TRUE);        // float(1)
var_dump((float) FALSE);       // float(0)
var_dump((float) 123);         // float(123)

# string
echo PHP_EOL, PHP_EOL;
var_dump("STRING");

$testString = 'qweqweqew';
$a = 'test $testString';
$b = "test $testString";
$c = "test {$testString}";

var_dump($a, $b, $c);

$d = <<<"RTYT"
Привет, мир!
Я тут первый раз!!!
RTYT;

var_dump($d);

echo PHP_EOL;
var_dump("Конкатенация строк");
$head = 'head';
var_dump($head . '_' . 'tail');

echo PHP_EOL;
var_dump("Приведение типов: все то же самое + class::__toString()");

# array
echo PHP_EOL, PHP_EOL;
var_dump("ARRAY");

$array = [
    "apple",
];
$array[] = "orange";
$array[] = 123;
$array[-1] = 123.33;

echo PHP_EOL;
var_dump("Обычный нумерованный массив");
var_dump($array);

$array = [
    "a" => "apple",
    "o" => "orange",
    "k" => "kiwi",
];

echo PHP_EOL;
var_dump("Ассоциативный массив");
var_dump($array);

echo PHP_EOL;
var_dump("Перебор массива: foreach");
foreach ($array as $key => $value) {
    var_dump("Key: $key, value: $value");
}

echo PHP_EOL;
var_dump("Перебор массива: while ... do");
do {
    $key = key($array);
    $value = current($array);
    var_dump("Key: {$key}, value: {$value}");
} while (next($array));

reset($array);

echo PHP_EOL;
var_dump("Перебор массива: for");
for (;;) {
    $key = key($array);
    $value = current($array);
    var_dump("Key: {$key}, value: {$value}");

    if (!next($array)) {
        break;
    }
}

echo PHP_EOL;
var_dump("Массив массивов");

$arrayInArray = [
    [1, 2, 3],
    [1, 2, 3],
];

foreach ($arrayInArray as $array) {

        foreach ($array as $value) {
            var_dump($value);
        }

}

echo PHP_EOL;
var_dump("Что можно положить в массив? Все что угодно!");

$array = [
    1,
    true,
    "testString",
    [1, 2, 3]
];

var_dump($array);

echo PHP_EOL;
var_dump("Что можно с массивами делать?");

echo PHP_EOL;
var_dump("array_merge");
var_dump(array_merge([1, 'bober', true], ['atas', false, [23]]));

echo PHP_EOL;
var_dump("array_intersect");
var_dump(array_intersect([1, 'bober', true], ['bober', false]));

echo PHP_EOL;
var_dump("array_values");
var_dump([30 => 'test1', 10 => 'test2']);
var_dump(array_values([10 => 'test1', 20 => 'test2']));

echo PHP_EOL;
var_dump("array_keys");
var_dump([30 => 'test1', 10 => 'test2']);
var_dump(array_keys([10 => 'test1', 20 => 'test2']));

# object
echo PHP_EOL, PHP_EOL;
var_dump("OBJECT");

class Test {
    private $a = 'banzay';
}

$testObject = new Test();
var_dump($testObject);

# resource
echo PHP_EOL, PHP_EOL;
var_dump("RESOURCE");

$file = fopen('types.json', 'r');
echo PHP_EOL;
var_dump($file);

echo PHP_EOL, PHP_EOL;
while ($string = fgets($file)) {
    var_dump(trim($string));
}
fclose($file);

# null
echo PHP_EOL, PHP_EOL;
var_dump("NULL");

var_dump($testNull);

$testNull = null;
var_dump($testNull);

var_dump(is_null($testNull));

unset($testNull);
var_dump($testNull);

// Псевдотипы
# iterable
# implements \Traversable {}
echo PHP_EOL, PHP_EOL;
var_dump("ITERABLE");

function iterableFunc(): iterable {
    return [1, 2, 3];
}

foreach (iterableFunc() as $item) {
    var_dump($item);
}

# callback
echo PHP_EOL, PHP_EOL;
var_dump("CALLBACK");
$func = function () {
    var_dump('var_dump callback');
};
function callbackFunc(callable $func) {
    $func();
}

callbackFunc($func);

# void
echo PHP_EOL, PHP_EOL;
var_dump("VOID");
function voidTest(): void {
    var_dump('voidTest');
}
voidTest();

# ...
echo PHP_EOL, PHP_EOL;
var_dump("...");
function multyParams(...$a) {
    var_dump(...$a);
}
multyParams(2, 4, 5, 'sdfsdfsdf');

// Переменные переменные
echo PHP_EOL, PHP_EOL;
var_dump("Переменные переменные");

$testA = 'apple';
$testB = 'testA';

var_dump($$testB);
