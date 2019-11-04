<?php

// Интерфейсы
interface Log {
    public function show(): void;
}

// Классы
class Comments implements Log
{
    public const STATUS_OPEN = 1;
    public const STATUS_CLOSE = 2;

    private $objectId;
    protected $comments = [];

    public function __construct(int $objectId)
    {
        $this->objectId = $objectId;
    }

    public function __destruct()
    {
        echo 'Я деструктор, я подчищаю за объектом'. PHP_EOL;
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function show(): void
    {
        echo (string)$this;
    }

    public function __toString()
    {
        $result = '';
        foreach ($this->comments as $comment) {
            $result .= $comment . PHP_EOL;
        }

        return $result;
    }

}

$objectComments = new Comments(12);
$objectComments->addComment('Первый коммент');
$objectComments->addComment('Второй коммент');
$objectComments->addComment('Последний коммент');

$objectComments->show();

// Статика
class CommentsMaker
{

    public static function make($objectId): Comments
    {
        return new Comments($objectId);
    }

}

var_dump(CommentsMaker::make(1));