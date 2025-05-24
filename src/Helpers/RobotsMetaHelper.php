<?php

namespace ArabicSeo\Seo\Helpers;

class RobotsMetaHelper
{
    public static function generateRobotsMeta($content, $hideRobotsMeta = false): string
    {
        if($hideRobotsMeta === true) {
            return '';
        }
        
        return $content;
    }
}