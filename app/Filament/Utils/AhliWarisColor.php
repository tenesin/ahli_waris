<?php

namespace App\Filament\Utils;

use Spatie\Color\Hex;
use Spatie\Color\Rgb;

class AhliWarisColor
{
    public const Gold = [
        100 => '243, 236, 220',
        200 => '234, 223, 196',
        300 => '224, 206, 166',
        400 => '214, 190, 137',
        500 => '203, 174, 108',
        600 => '173, 142, 71',
        700 => '129, 105, 52',
        800 => '97, 79, 39',
        900 => '65, 53, 26',
    ];

    /**
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}
     */
    public static function hex(string $color): array
    {
        return static::generateShades(Hex::fromString($color)->toRgb());
    }

    /**
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}
     */
    public static function rgb(string $color): array
    {
        return static::generateShades(Rgb::fromString($color));
    }

    /**
     * @return array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}
     */
    protected static function generateShades(Rgb $color): array
    {
        $colors = [];

        $intensityMap = [
            50 => 0.95,
            100 => 0.9,
            200 => 0.75,
            300 => 0.6,
            400 => 0.3,
            500 => 1.0,
            600 => 0.9,
            700 => 0.75,
            800 => 0.6,
            900 => 0.49,
            950 => 0.3,
        ];

        foreach ($intensityMap as $shade => $intensity) {
            if ($shade < 500) {
                $red = ((255 - $color->red()) * $intensity) + $color->red();
                $green = ((255 - $color->green()) * $intensity) + $color->green();
                $blue = ((255 - $color->blue()) * $intensity) + $color->blue();
            } else {
                $red = $color->red() * $intensity;
                $green = $color->green() * $intensity;
                $blue = $color->blue() * $intensity;
            }

            $colors[$shade] = sprintf('%s, %s, %s', round($red), round($green), round($blue));
        }

        return $colors;
    }

    /**
     * @return array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}>
     */
    public static function all(): array
    {
        return [
            'gold' => static::Gold,
        ];
    }
}
