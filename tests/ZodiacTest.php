<?php

use Jetfuel\LhcZodiacWuxing\Zodiac;
use PHPUnit\Framework\TestCase;

class ZodiacTest extends TestCase
{
    public function testGetZodiacNumbers()
    {
        $zodiacNumbers = Zodiac::getZodiacNumbers(2020);

        $this->assertEquals([
            'rat'     => [1, 13, 25, 37, 49],
            'ox'      => [12, 24, 36, 48],
            'tiger'   => [11, 23, 35, 47],
            'rabbit'  => [10, 22, 34, 46],
            'dragon'  => [9, 21, 33, 45],
            'snake'   => [8, 20, 32, 44],
            'horse'   => [7, 19, 31, 43],
            'goat'    => [6, 18, 30, 42],
            'monkey'  => [5, 17, 29, 41],
            'rooster' => [4, 16, 28, 40],
            'dog'     => [3, 15, 27, 39],
            'pig'     => [2, 14, 26, 38],
        ], $zodiacNumbers);
    }

    public function testGetNumberZodiacs()
    {
        $numberZodiacs = Zodiac::getNumberZodiacs(2020);

        $this->assertEquals([
            1 => 'rat',
            2 => 'pig',
            3 => 'dog',
            4 => 'rooster',
            5 => 'monkey',
            6 => 'goat',
            7 => 'horse',
            8 => 'snake',
            9 => 'dragon',
            10 => 'rabbit',
            11 => 'tiger',
            12 => 'ox',
            13 => 'rat',
            14 => 'pig',
            15 => 'dog',
            16 => 'rooster',
            17 => 'monkey',
            18 => 'goat',
            19 => 'horse',
            20 => 'snake',
            21 => 'dragon',
            22 => 'rabbit',
            23 => 'tiger',
            24 => 'ox',
            25 => 'rat',
            26 => 'pig',
            27 => 'dog',
            28 => 'rooster',
            29 => 'monkey',
            30 => 'goat',
            31 => 'horse',
            32 => 'snake',
            33 => 'dragon',
            34 => 'rabbit',
            35 => 'tiger',
            36 => 'ox',
            37 => 'rat',
            38 => 'pig',
            39 => 'dog',
            40 => 'rooster',
            41 => 'monkey',
            42 => 'goat',
            43 => 'horse',
            44 => 'snake',
            45 => 'dragon',
            46 => 'rabbit',
            47 => 'tiger',
            48 => 'ox',
            49 => 'rat',
        ], $numberZodiacs);
    }

    public function testGetDutyZodiac()
    {
        $this->assertEquals('rat', Zodiac::getDutyZodiac(2020));
        $this->assertEquals('ox', Zodiac::getDutyZodiac(2021));
        $this->assertEquals('tiger', Zodiac::getDutyZodiac(2022));
        $this->assertEquals('rabbit', Zodiac::getDutyZodiac(2023));
        $this->assertEquals('rooster', Zodiac::getDutyZodiac(2029));
        $this->assertEquals('dog', Zodiac::getDutyZodiac(2030));
        $this->assertEquals('rabbit', Zodiac::getDutyZodiac(2035));
        $this->assertEquals('dragon', Zodiac::getDutyZodiac(2036));
    }
}
