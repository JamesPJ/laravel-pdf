<?php

namespace Jamespj\LaravelPdf\Support;

use Jamespj\LaravelPdf\Facades\Pdf;
use Jamespj\LaravelPdf\PdfBuilder;

function pdf(string $viewPath = '', array $data = []): PdfBuilder
{
    return Pdf::view($viewPath, $data);
}
