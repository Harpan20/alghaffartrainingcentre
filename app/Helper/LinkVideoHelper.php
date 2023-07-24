<?php

namespace App\Helper;

use Illuminate\Support\Str;

class LinkVidoeHelper
{
    public static function changeToEmbed($video_link)
    {
        if (Str::contains($video_link, 'https://www.youtube.com/watch?v=')) {
            return Str::replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $video_link);
        }

        if (Str::contains($video_link, 'https://youtu.be/')) {
            return Str::replace('https://youtu.be/', 'https://www.youtube.com/embed/', $video_link);
        }

        return $video_link;
    }
}
