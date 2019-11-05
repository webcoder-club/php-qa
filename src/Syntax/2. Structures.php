<?php
declare(strict_types=1);

// Управляющие конструкции

# if elseif else
echo PHP_EOL, PHP_EOL;
var_dump("IF ELSEIF ELSE");

$a = 1;
$b = 2;
if ($a > $b) {
    var_dump("a больше, чем b");
} elseif ($a == $b) {
    var_dump("a равен b");
} else {
    var_dump("a меньше, чем b");
}

# switch
echo PHP_EOL, PHP_EOL;
var_dump("SWITCH");

switch ($a <=> $b) {
    case 0:
        var_dump("a равен b");
        break;
    case 1:
        var_dump( "a больше, чем b");
        break;
    case -1:
        var_dump("a меньше, чем b");
        break;
    default:
        var_dump("default");
}

echo PHP_EOL;
var_dump("switch break");

$itemStatus = 5;
switch ($itemStatus) {
    case 5:
        var_dump("Item перешел в статус 5 - оповещаем пользователя");
    case 10:
        var_dump("Item перешел в статус 10 - шлем данные в Почту РФ");
        break;
    default:
        var_dump("Неожиданная ситуация - паникуем!!!");
}

# циклы
echo PHP_EOL, PHP_EOL;
var_dump("ЦИКЛЫ");

echo PHP_EOL;
var_dump("while");

$i = 5;
while ($i <= 10) {
    var_dump($i++);
}

echo PHP_EOL;
var_dump("do while");

$i = 3;
do {
    var_dump($i);

    $i--;
} while ($i > 0);

echo PHP_EOL;
var_dump("for");

for ($i = 1; $i <= 10; $i++) {
    if (0 == ($i % 2)) {
        continue;
    }

    if ($i >= 8) {
        break;
    }

    var_dump($i);
}

// for ($i = 1; ; $i++) {
// for ($i = 1; $i <= 10; ) {
// for ( ; $i <= 10; $i++) {
// for ( ; ; ) {

echo PHP_EOL;
var_dump("foreach");

function iterableFunc(): iterable {
    return [1, 2, 3];
}

foreach (iterableFunc() as $item) {
    var_dump($item);
}

echo PHP_EOL;
foreach ([10 => 'test1', 20 => 'test2', -3 => 'test3'] as $key => $value) {
    var_dump("$key => $value");
}

echo PHP_EOL;
var_dump("foreach");

# require vs include
//require('somefile.php'); // fatal
//include('somefile.php'); // warning
//require_once('somefile.php');
//include_once('somefile.php');

# goto
echo PHP_EOL;
var_dump("goto");

$i = 10;
goto_must_die:

var_dump($i);
$i--;

if ($i >= 1) {
    goto goto_must_die;
}

