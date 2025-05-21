<?php

namespace ArabicSeo\Seo\Helpers;

use ArabicSeo\Seo\Helpers\SlugHelper;

class SeoManager
{
    public function generateSlug(string $text): string
    {
        return SlugHelper::arabicSlug($text);
    }

    public function meta(array $data): string
    {
        return view('arabic-seo::meta-tags', compact('data'))->render();
    }
}
