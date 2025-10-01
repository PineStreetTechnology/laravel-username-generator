<?php

use PineStreetTechnology\UsernameGenerator\Adjective;
use PineStreetTechnology\UsernameGenerator\Noun;

it('can select a random list of nouns', function () {
    $nounObj = new Noun();
    $nouns = $nounObj->selectWords(3);

    $this->assertCount(3, $nouns);
    $nounList = $nounObj->getWords();

    foreach ($nouns as $noun) {
        $this->assertTrue(in_array($noun, $nounList));
    }
});

it('can use static make function', function () {
    $nouns = Noun::make();

    $this->assertCount(1, $nouns);
});

it('can select a random list of adjectives', function ($count) {
    $adjectiveObj = new Adjective();
    $adjectives = $adjectiveObj->selectWords($count);

    $this->assertCount($count, $adjectives);
    $adjectiveList = $adjectiveObj->getWords();

    foreach ($adjectives as $adjective) {
        $this->assertTrue(in_array($adjective, $adjectiveList));
    }
})->with(range(1, 5));
