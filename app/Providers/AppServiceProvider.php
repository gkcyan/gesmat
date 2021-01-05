<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Maatwebsite\Excel\Writer;
use \Maatwebsite\Excel\Sheet;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Writer::macro('setCreator', function (Writer $writer, string $creator) {
            $writer->getDelegate()->getProperties()->setCreator($creator);
        });
        Writer::macro('setLastModifiedBy', function (Writer $writer, string $LastModifiedBy) {
            $writer->getDelegate()->getProperties()->setLastModifiedBy($LastModifiedBy);
        });
        Writer::macro('setTitle', function (Writer $writer, string $title) {
            $writer->getDelegate()->getProperties()->setTitle($title);
        });
        Sheet::macro('setOrientation', function (Sheet $sheet, $orientation) {
            $sheet->getDelegate()->getPageSetup()->setOrientation($orientation);
        });
        Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
            $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
