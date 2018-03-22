<?php

namespace Day1;

class User
{
    /** @var string */
    public $name;

    /** @var int */
    public $age = 0;

    /** @var int */
    protected $money = 0;

    /** @var string */
    private $password;

    public function __construct($name, $money = 0)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function sayHello() // Методы
    {
        echo $this->money . ' Hello ' . $this->name . "\n";
    }

    public function setMoney($money)
    {
        $this->money = $money;
    }

    public function sayPass()
    {
        echo "My password is " . $this->password . "\n";
    }


    public function setPassword(string $password)
    {
        $this->password = md5($password);
    }

}


class AdminUser extends User
{
    public function banUser()
    {
        echo "I ban somebody \n";
    }

    public function sayHello()
    {
        echo "Hi, my name is " . $this->name . "\n";
        $this->money = 99999;
        echo "Ive got " . $this->money . "\n";
    }
}


$user = new User('iSomov', 123);

$user->sayHello();
$user->setPassword('qwerty');
$user->sayPass();

$admin = new AdminUser('vleonov');

$admin->sayHello();
$admin->setPassword('qwerty2');
$admin->sayPass();
$admin->banUser();
