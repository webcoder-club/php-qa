<?php

namespace HomeWork2;

class DealWithIt
{
    /**
     * example@test.ru превращает в e******@test.ru
     * @param string $string
     * @return string
     */
    public function replace1(string $string): string
    {
        return preg_replace('/(?<=.).(?=.*@)/', '*', $string);
    }

    /**
     * example@test.ru превращает в e******@test.ru
     * @param string $string
     * @return string
     */
    public function replace2(string $string): string
    {
        return preg_replace('(?<=@.)[a-zA-Z0-9-]*(?=(?:[.]|$))', '*', $string);
    }

    /**
     * example@test.ru превращает в exa***@test.ru
     * @param string $string
     * @return string
     */
    public function obfuscate_email(string $string): string
    {
        $em = explode("@", $string);
        $name = implode(array_slice($em, 0, count($em) - 1), '@');
        $len = floor(strlen($name) / 2);

        return substr($name, 0, $len) . str_repeat('*', $len) . "@" . end($em);
    }

    /**
     * example@test.ru превращает в exa***e@test.ru
     * @param string $email
     * @return string
     */
    public function mask_email(string $email): string
    {
        $char_shown = 3;

        $mail_parts = explode("@", $email);
        $username = $mail_parts[0];
        $len = strlen($username);

        if ($len <= $char_shown) {
            return implode("@", $mail_parts);
        }

        $mail_parts[0] = substr($username, 0, $char_shown)
            . str_repeat("*", $len - $char_shown - 1)
            . substr($username, $len - $char_shown + 2, 1);

        return implode("@", $mail_parts);
    }
}