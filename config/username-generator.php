<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Adjectives
    |--------------------------------------------------------------------------
    |
    | This value is the number of adjectives you want
    | to use to generate a username. It should be
    | an integer.
    |
    */

    'adjectives' => 1,

    /*
    |--------------------------------------------------------------------------
    | Nouns
    |--------------------------------------------------------------------------
    |
    | This value is the number of nouns you want
    | to use to generate a username. It should be
    | an integer.
    |
    */

    'nouns' => 1,

    /*
    |--------------------------------------------------------------------------
    | Digits
    |--------------------------------------------------------------------------
    |
    | This value is the number of digits you want to
    | append to the end of the username. It should
    | be an integer. Use zero to append no digits.
    |
    */

    'digits' => 0,

    /*
    |--------------------------------------------------------------------------
    | Casing
    |--------------------------------------------------------------------------
    |
    | This value is type of casing to use for the
    | username after it is generated. It should
    | be any value available with Laravel's
    | string helpers.
    |
    | "lower": "hello world", "upper": "HELLO WORLD", "studly": "HelloWorld",
    | "kebab": "hello-world", "camel": "helloWorld", "snake": "hello_world",
    | "slug": "my-blog-post", "title": "Hello World", "headline": "My Title",
    | "lcfirst": "hello World", "ucfirst": "Hello world", "plural": "cats",
    | "singular": "cat", "ucsplit": "['Camel', 'Case']", "squish": "hello world",
    | "trim": "hello world", "ltrim": "world", "rtrim": "hello"
    |
    */

    'casing' => 'studly',
];
