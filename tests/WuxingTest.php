<?php

use Jetfuel\LhcZodiacWuxing\Wuxing;
use PHPUnit\Framework\TestCase;

class WuxingTest extends TestCase
{
    public function testGetWuxingNumbers()
    {
        $wuxingNumbers = Wuxing::getWuxingNumbers(2020);

        $this->assertEquals([
            'metal' => [6, 7, 20, 21, 28, 29, 36, 37],
            'wood'  => [2, 3, 10, 11, 18, 19, 32, 33, 40, 41, 48, 49],
            'water' => [8, 9, 16, 17, 24, 25, 38, 39, 46, 47],
            'fire'  => [4, 5, 12, 13, 26, 27, 34, 35, 42, 43],
            'earth' => [1, 14, 15, 22, 23, 30, 31, 44, 45],
        ], $wuxingNumbers);
    }

    public function testGetNumberWuxings()
    {
        $numberWuxings = Wuxing::getNumberWuxings(2020);

        $this->assertEquals([
            1 => 'earth',
            2 => 'wood',
            3 => 'wood',
            4 => 'fire',
            5 => 'fire',
            6 => 'metal',
            7 => 'metal',
            8 => 'water',
            9 => 'water',
            10 => 'wood',
            11 => 'wood',
            12 => 'fire',
            13 => 'fire',
            14 => 'earth',
            15 => 'earth',
            16 => 'water',
            17 => 'water',
            18 => 'wood',
            19 => 'wood',
            20 => 'metal',
            21 => 'metal',
            22 => 'earth',
            23 => 'earth',
            24 => 'water',
            25 => 'water',
            26 => 'fire',
            27 => 'fire',
            28 => 'metal',
            29 => 'metal',
            30 => 'earth',
            31 => 'earth',
            32 => 'wood',
            33 => 'wood',
            34 => 'fire',
            35 => 'fire',
            36 => 'metal',
            37 => 'metal',
            38 => 'water',
            39 => 'water',
            40 => 'wood',
            41 => 'wood',
            42 => 'fire',
            43 => 'fire',
            44 => 'earth',
            45 => 'earth',
            46 => 'water',
            47 => 'water',
            48 => 'wood',
            49 => 'wood',
        ], $numberWuxings);
    }
}
