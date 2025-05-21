<?php

namespace ArabicSeo\Seo\Tests;

use Orchestra\Testbench\TestCase;
use ArabicSeo\Seo\Facades\Seo;
use ArabicSeo\Seo\SeoServiceProvider;

class SeoTest extends TestCase
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
    public function test_slug_generation()
    {
        $slug = Seo::generateSlug('اللغة العربية جميلة');
        $this->assertEquals('اللغة-العربية-جميلة', $slug);
    }
}
