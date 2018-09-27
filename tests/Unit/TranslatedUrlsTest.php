<?php


namespace Tests\Unit;


use Tests\TestCase;

class TranslatedUrlsTest extends TestCase
{
    /**
     *@test
     */
    public function it_translates_urls_into_the_alternate_lang_url()
    {
        app()->setLocale('en');

        $english_cases = collect([
            '/en/test' => '/zh/test',
            '/test' => '/zh/test',
            '/en/test/case' => '/zh/test/case',
            'test/case' => '/zh/test/case',
            'en/test' => '/zh/test',
            '/en/' => '/zh/',
            '/en' => '/zh/',
        ]);

        $english_cases->each(function($expected, $input) {
            $this->assertEquals($expected, transUrl($input), "Expected {$input} to be translated to {$expected}");
        });

        app()->setLocale('zh');

        $chinese_cases = collect([
            '/test' => '/en/test',
            '/zh/test' => '/en/test',
            '/zh/test/case' => '/en/test/case',
            'zh/test' => '/en/test',
            '/zh/' => '/en/',
            '/zh' => '/en/',
        ]);

        $chinese_cases->each(function($expected, $input) {
           $this->assertEquals($expected, transUrl($input), "Expected {$input} to be translated to {$expected}");
        });
    }
}