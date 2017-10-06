<?php
namespace Kata\RansomNote;

class Magazine
{

    private $availableWords;

    public function __construct($content)
    {
        $this->availableWords = $this->countWordsInString($content);
    }

    public function canWrite($sentence)
    {
        $desiredWords = $this->countWordsInString($sentence);

        foreach ($desiredWords as $word => $number) {
            if (($this->availableWords[$word] ?? 0) < $number) {
                return false;
            }
        }

        return true;
    }

    private function countWordsInString($string)
    {
        return array_count_values(explode(' ', $string));
    }
}
