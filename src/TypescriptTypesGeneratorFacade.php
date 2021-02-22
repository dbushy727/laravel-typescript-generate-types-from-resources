<?php

namespace Dbushy727\TypescriptTypesGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dbushy727\TypescriptTypesGenerator\TypescriptTypesGenerator
 */
class TypescriptTypesGeneratorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-typescript-generate-types-from-resources';
    }
}
