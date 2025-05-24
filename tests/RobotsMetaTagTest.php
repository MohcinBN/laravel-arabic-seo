<?php

namespace ArabicSeo\Seo\Tests;

use Orchestra\Testbench\TestCase;
use ArabicSeo\Seo\Facades\Seo;
use ArabicSeo\Seo\SeoServiceProvider;

class RobotsMetaTagTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SeoServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Seo' => Seo::class,
        ];
    }

    /**
     * @test
     */
    public function it_generates_robots_meta_tag()
    {
        $robotsMetaTag = Seo::generateRobotsMeta('noindex, nofollow');
        $this->assertEquals('noindex, nofollow', $robotsMetaTag);
    }

    /**
     * @test
     */
    public function it_generates_robots_meta_tag_with_hide_robots_content()
    {
        $robotsMetaTag = Seo::generateRobotsMeta('noindex, nofollow', true);
        $this->assertEquals('', $robotsMetaTag);
    }
}
