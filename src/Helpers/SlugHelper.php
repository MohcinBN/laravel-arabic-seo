<?php

namespace ArabicSeo\Seo\Helpers;

class SlugHelper
{
    public static function arabicSlug(string $text): string
    {
        $text = preg_replace('/[^\p{Arabic}\p{L}\p{N}\s-]+/u', '', $text);
        return trim(preg_replace('/\s+/u', '-', $text), '-');
    }
}
