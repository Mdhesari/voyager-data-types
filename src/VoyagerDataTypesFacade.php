<?php

namespace Mdhesari\VoyagerDataTypes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mdhesari\VoyagerDataTypes\VoyagerDataTypes
 */
class VoyagerDataTypesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'voyager-data-types';
    }
}
