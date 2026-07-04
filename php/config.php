<?php
declare(strict_types=1);

// Kanyerest SDK configuration

class KanyerestConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "Kanyerest",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://api.kanye.rest",
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "get_random_quote" => [],
                ],
            ],
            "entity" => [
        'get_random_quote' => [
          'fields' => [
            [
              'active' => true,
              'name' => 'quote',
              'req' => true,
              'type' => '`$STRING`',
              'index$' => 0,
            ],
          ],
          'name' => 'get_random_quote',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'active' => true,
                  'args' => [],
                  'method' => 'GET',
                  'orig' => '/',
                  'parts' => [],
                  'select' => [],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'load',
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return KanyerestFeatures::make_feature($name);
    }
}
