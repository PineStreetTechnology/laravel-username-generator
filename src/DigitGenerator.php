<?php

namespace PineStreetTechnology\UsernameGenerator;

class DigitGenerator
{
    protected array $notAllowed = [
        '69',
    ];

    public function generate(int $digits = 1): string
    {
        if ($digits < 1) {
            return '';
        }

        $string = array_reduce(
            range(0, $digits - 1),
            fn (string $carry, $n) => $carry . rand(0, 9),
            ''
        );

        if (in_array($string, $this->notAllowed)) {
            return $this->generate($digits);
        }

        return $string;
    }

    public static function make(int $digits = 1): string
    {
        return (new DigitGenerator)
            ->generate($digits);
    }
}
