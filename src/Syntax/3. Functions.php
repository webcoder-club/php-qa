<?php

// Функции

echo PHP_EOL;
var_dump("formatData");

function formatData($timestamp = null): string {
    if (is_null($timestamp)) {
        $timestamp = time();
    }

    return date('m-Y-d', $timestamp);
}

var_dump(formatData());
var_dump(formatData(1231332313));

echo PHP_EOL, PHP_EOL;
var_dump("IF ELSEIF ELSE");

function test(int $a, $b = null, string $c = ''): void {
    var_dump($a);
    var_dump($b);
    var_dump($c);
}

test(12, 34, 'test');

// Анонимные функции
echo PHP_EOL, PHP_EOL;
var_dump("Анонимные функции");

$noNameFunction =  function ($name) {
    return 'noNameFunction_' . $name;
};

var_dump($noNameFunction('SimpleName'));

echo PHP_EOL;
var_dump("Какая польза от анонимных функций - передача поведения/стратегий");

var_dump(preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world'));

echo PHP_EOL;
var_dump("Какая польза от анонимных функций - счетчки событий");

$iterator = function () {
    static $iter = 0;
    $iter++;
    var_dump("iter => " . $iter);
};
$iterator();
$iterator();
$iterator();

// Замыкания
echo PHP_EOL, PHP_EOL;
var_dump("Замыкания");

$message = 'Эники беники ели вареники';
$example = function () use ($message) {
    var_dump($message);
};
$example();

$message = 'Цу е фа';
$example();

// Рекурсия
echo PHP_EOL, PHP_EOL;
var_dump("Рекурсия");

function showTree($tree, $prefix = '') {
    foreach ($tree as $element) {
        if (is_array($element)) {
            showTree($element, '-> ' . $prefix);
        } else {
            echo $prefix . $element . PHP_EOL;
        }
    }
}

showTree([
    0,
    [
        1,
        [2, 3],
    ],
    [
        [
            [4, 5],
            [6, 7],
        ],
        [
            [8, 9],
            10,
            11,
        ],
        12,
        13
    ]
]);