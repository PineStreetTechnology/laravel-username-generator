<?php

namespace PineStreetTechnology\UsernameGenerator;

abstract class WordSelector
{
    protected array $words = [];

    final public function __construct()
    {
    }

    public function getWords(): array
    {
        return $this->words;
    }

    public function selectWords(int $count = 1): array
    {
        if ($count < 1) {
            return [];
        }

        return array_map(
            function () {
                $index = rand(0, count($this->words) - 1);

                return $this->words[$index];
            },
            range(0, $count - 1)
        );
    }

    public static function make(int $count = 1): array
    {
        return (new static)
            ->selectWords($count);
    }
}
