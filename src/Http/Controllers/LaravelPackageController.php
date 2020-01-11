<?php

namespace Heavykenny\LaravelPackage;

use Heavykenny\LaravelPackage\Model\LaravelPackageModel;
use Heavykenny\LaravelPackage\Repository\LaravelPackageRepository;
use Illuminate\Routing\Controller;

class LaravelPackageController extends Controller
{
    /**
     * @var LaravelPackageRepository
     */
    private $laravelPackageRepository;

    public function __construct(LaravelPackageModel $laravelPackageModel)
    {
        $this->laravelPackageRepository = new LaravelPackageRepository($laravelPackageModel);
    }
}
