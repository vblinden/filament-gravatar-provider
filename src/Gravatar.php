<?php

namespace Vblinden\Filament\Gravatar;

class Gravatar
{
    /**
     * Generate a Gravatar URL for the given email address.
     *
     * @param  string  $email
     * @param  int  $size  In pixels, minimum 1, maximum 2048
     * @param  string  $default  Default image to use if no Gravatar is found. Options include 'color', '404', 'mp', 'identicon', 'monsterid', 'wavatar', 'retro', 'robohash', 'blank', or a custom URL
     * @param  bool  $forceDefault  Whether to force the default image even if a Gravatar is found
     * @param  bool  $rating  The maximum rating to return. Options include 'g', 'pg', 'r', 'x'
     */
    public static function url($email, $size = 80, $default = 'retro', $forceDefault = false, $rating = 'g'): string
    {
        $hash = hash('sha256', (strtolower(trim($email))));

        return "https://www.gravatar.com/avatar/{$hash}?".http_build_query(array_filter([
            'd' => urlencode($default),
            's' => $size,
            'f' => $forceDefault ? 'y' : null,
            'r' => $rating,
        ]));
    }
}
