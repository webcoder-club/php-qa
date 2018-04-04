<?php

namespace HomeWork2;

class FindLongest
{
    /**
     * @param string $text
     * @return array
     */
    public function get(string $text)
    {
        $arr = array_flip(explode(' ', $text));

        foreach ($arr as $word => $length) {
            $arr[$word] = mb_strlen($word);
        }

        asort($arr);

        return array_slice($arr, -3, 3);
    }

    /**
     * @param string $str
     * @return array
     */
    public function findLongest(string $str): array
    {
        $result = [];
        $maxWordLen = 0;
        $arr = explode(" ", $str);
        foreach ($arr as $word) {
            $realWord = trim($word, ".!?;- \t\n\r\0\x0B");
            $strLen = mb_strlen($realWord);
            if ($strLen >= $maxWordLen) {
                if ($strLen > $maxWordLen) {
                    $result = [];
                    $maxWordLen = $strLen;
                }
                $result[] = $realWord;
            }
        }

        return $result;
    }

}