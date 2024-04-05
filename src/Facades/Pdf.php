<?php

namespace Jamespj\LaravelPdf\Facades;

use Illuminate\Support\Facades\Facade;
use Jamespj\LaravelPdf\FakePdfBuilder;
use Jamespj\LaravelPdf\PdfFactory;

/**
 * @mixin \Jamespj\LaravelPdf\PdfBuilder
 * @mixin \Jamespj\LaravelPdf\FakePdfBuilder
 */
class Pdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PdfFactory::class;
    }

    public static function fake()
    {
        $fake = new FakePdfBuilder();

        static::swap($fake);
    }
}
