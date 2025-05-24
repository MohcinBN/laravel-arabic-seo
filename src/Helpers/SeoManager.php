<?php

namespace ArabicSeo\Seo\Helpers;

use ArabicSeo\Seo\Helpers\SlugHelper;
use ArabicSeo\Seo\Helpers\RobotsMetaHelper;

class SeoManager
{
    public function generateSlug(string $text): string
    {
        return SlugHelper::arabicSlug($text);
    }

    public function generateRobotsMeta(string $content, bool $hideRobotsMeta = false): string
    {
        return RobotsMetaHelper::generateRobotsMeta($content, $hideRobotsMeta);
    }

    public function meta(array $data): string
    {
        return view('arabic-seo::meta-tags', compact('data'))->render();
    }
}
