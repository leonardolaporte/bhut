<?php

namespace Multiples\Libraries;

class Multiples
{
    private const REPLACES = [
        'BHUT',
        'IT',
        'BHUT TI'
    ];

    /**
     * Exibe todos os números de 1 até o parâmetro $numberStop
     *
     * @param int $numberStop Número limite para impressão
     *
     * @return null
     */
    public function showNumbers(int $numberStop)
    {
        $numberStart = 1;
        for ($i = $numberStart; $i <= $numberStop; $i++) {
            echo $this->testNumbers($i), "</br>";
        }
    }

    /**
     * Testa se o número é múltiplo de 3, de 5 ou de ambos
     *
     * @param int $number number to test
     *
     * @return string
     */
    public function testNumbers(int $number): string
    {
        $mod3 = intval(bcmod($number, 3));
        $mod5 = intval(bcmod($number, 5));
        $arrayMod = [$mod3, $mod5, ($mod3 + $mod5)];

        for ($i = 0; $i < count(self::REPLACES); $i++) {
            if ($arrayMod[$i] === 0) {
                $number = self::REPLACES[$i];
            }
        }

        return (string) $number;
    }
}
