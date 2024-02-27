<?php

namespace App\Services\Short;

class SymbolGeneration
{
    /**
     * @var int $chainLength
     */
    protected int $chainLength;

    public function __construct(int $chainLength = 2)
    {
        $this->chainLength = $chainLength <= 0 || $chainLength > 10 ? 2 : $chainLength;
    }

    /**
     * Get sequence of symbols and numbers.
     * Length of sequence determined by $this->chainLength variable
     * For $this->chainLength = 2 its make 1891 unique combination
     *
     * @return string
     */
    public function getShortLink(): string
    {
        $digits = '0123456789';
        $smallChars = 'abcdefghijklmnopqrstuvwxyz';
        $capitalizedChars = strtoupper($smallChars);

        $chars = $digits . $smallChars . $capitalizedChars;

        return substr(str_shuffle($chars), 0, $this->chainLength);
    }
}
