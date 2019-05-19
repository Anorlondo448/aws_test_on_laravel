<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CalculatePointService extends Facade
{
    protected static function getFacadeAccessor() {
        return 'CalculatePointService';
    }
}