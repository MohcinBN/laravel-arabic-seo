<?php

namespace ArabicSeo\Seo\Tests;

use Orchestra\Testbench\TestCase;
use ArabicSeo\Seo\Facades\Seo;
use ArabicSeo\Seo\SeoServiceProvider;

class RtlTagHelperTest extends TestCase
{
    // set up the service provider
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
    public function it_generates_arabic_right_to_left_meta_tag()
    {
        $arabicDirectionTag = Seo::arabicDirectionTag('rtl');
        $this->assertEquals('rtl', $arabicDirectionTag);
    }
}
