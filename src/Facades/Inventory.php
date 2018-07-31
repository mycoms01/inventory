<?php
/**
 * Created by PhpStorm.
 * User: sanitkeawtawan
 * Date: 31/7/2018 AD
 * Time: 15:17
 */
namespace Stevebauman\Inventory\Facades;
use Illuminate\Support\Facades\Facade;
class Inventory extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'inventory';
    }
}