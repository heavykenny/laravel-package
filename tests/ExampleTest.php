<?php

namespace Heavykenny\LaravelPackage\Tests;

use Heavykenny\LaravelPackage\Model\LaravelPackageModel;
use Heavykenny\LaravelPackage\Repository\LaravelPackageRepository;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function check_package_index()
    {
        $model = new LaravelPackageModel;
        $package = new LaravelPackageRepository($model);

        $index = $package->index();

        $this->assertTrue($index);
    }
}
