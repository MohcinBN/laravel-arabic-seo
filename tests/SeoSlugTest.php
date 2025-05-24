<?php

namespace ArabicSeo\Seo\Tests;

use Orchestra\Testbench\TestCase;
use ArabicSeo\Seo\Facades\Seo;
use ArabicSeo\Seo\SeoServiceProvider;

class SeoSlugTest extends TestCase
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
    public function it_generates_slug()
    {
        $slug = Seo::generateSlug('اللغة العربية جميلة');
        $this->assertEquals('اللغة-العربية-جميلة', $slug);
    }
}
