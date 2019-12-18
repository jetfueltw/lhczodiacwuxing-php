# lhczodiacwuxing-php

六合彩每年的生肖、五行號碼，支援時間從 `2017` 到 `2036` 年。

# Installation

```sh
composer require jetfueltw/lhczodiacwuxing-php
```

```php
use Jetfuel\LhcZodiacWuxing\Zodiac;
use Jetfuel\LhcZodiacWuxing\Wuxing;
```

# Useage

取得 2020 年的生肖號碼
```php
$zodiacNumbers = Zodiac::getZodiacNumbers(2020);
// [
//     'rat'     => [1, 13, 25, 37, 49],
//     'ox'      => [12, 24, 36, 48],
//     'tiger'   => [11, 23, 35, 47],
//     'rabbit'  => [10, 22, 34, 46],
//     'dragon'  => [9, 21, 33, 45],
//     ...
// ]
```

取得 2020 年的號碼生肖
```php
$numberZodiacs = Zodiac::getNumberZodiacs(2020);
// [
//     1 => 'rat',
//     2 => 'pig',
//     3 => 'dog',
//     4 => 'rooster',
//     5 => 'monkey',
//     ...
// ]
```

取得 2020 年的生肖
```php
$dutyZodiac = Zodiac::getDutyZodiac(2020);
// 'rat'
```

取得 2020 年的五行號碼
```php
$wuxingNumbers = Wuxing::getWuxingNumbers(2020);
// [
//     'metal' => [6, 7, 20, 21, 28, 29, 36, 37],
//     'wood'  => [2, 3, 10, 11, 18, 19, 32, 33, 40, 41, 48, 49],
//     'water' => [8, 9, 16, 17, 24, 25, 38, 39, 46, 47],
//     'fire'  => [4, 5, 12, 13, 26, 27, 34, 35, 42, 43],
//     'earth' => [1, 14, 15, 22, 23, 30, 31, 44, 45],
// ]
```

取得 2020 年的號碼五行
```php
$numberWuxings = Wuxing::getNumberWuxings(2020);
// [
//     1 => 'earth',
//     2 => 'wood',
//     3 => 'wood',
//     4 => 'fire',
//     5 => 'fire',
//     ...
// ]
```
