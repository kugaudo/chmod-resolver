<?php
declare(strict_types=1);

namespace Kugaudo\Chmod;


class DigitExtractor
{
    public function get(int $value, int $digit)
    {
        return $value / pow(10, $digit) % 10;
    }
}
