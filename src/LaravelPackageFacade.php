<?php

namespace Heavykenny\LaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Heavykenny\LaravelPackage\Skeleton\SkeletonClass
 */
class LaravelPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-package';
    }
}
