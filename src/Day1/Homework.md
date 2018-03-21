### Reversed Strings
Необходимо инвертировать строку
```php
$reverse->solution("world"); // returns "dlrow"
```

### Gauß needs help!
Необходимо посчитать сумму чисел до данного
```php
$sum->(100); // returns 5050
$sum->(3); // returns 6
```

## Count it!
Необходимо найти число вхождений какой-нибуть выбранной вами цифры в выбранном вами числе.
```php
$counter->count(5, 442158755745); // returns 4
``` 

## Brevity is the soul of wit
Необходимо создать сокращенный вариант ФИО
```php
$name->cut('Сомов Игорь Андреевич'); // returns 'Сомов И. А.'
```

## FuzzBuzz
Необходимо заменить число, которое делится на 3 без остатка на fizz, а то, которое делится на 5 без остатка на buzz.
Если делится и на то и на то, то записать fizzbuzz.
```php
$fb->get(1); // returns 1
$fb->get(3); // returns 'fizz'
$fb->get(5); // returns 'buzz'
$fb->get(9); // returns 'fizz'
$fb->get(15); // returns 'fizzbuzz'
```

## Avito parser
Необходимо из строки получить телефон и ссылки
```php
$string = "Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a>";
$p = new Parser($string);
$p->getLinks(); // returns ['https://example.com/']
$p->getPhones(); // returns ['+7(985)808-86-90']
```