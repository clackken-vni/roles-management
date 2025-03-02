<?php

namespace Vnideas\RolesManagement\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vnideas\RolesManagement\RolesManagement
 */
class RolesManagement extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vnideas\RolesManagement\RolesManagement::class;
    }
}
