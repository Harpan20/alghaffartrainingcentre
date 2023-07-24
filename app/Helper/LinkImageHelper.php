<?php

namespace App\Helper;

use Illuminate\Support\Str;

class LinkImageHelper
{
    public static function check($image_link)
    {
        $dummy_word = 'https';
        $is_contain_word_from_dummy = Str::contains($image_link, $dummy_word);

        if ($is_contain_word_from_dummy) {
            return $image_link;
        } else {
            return asset('/storage/' . $image_link);
        }
    }
}
