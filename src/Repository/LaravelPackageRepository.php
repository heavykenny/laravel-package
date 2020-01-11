<?php

namespace Heavykenny\LaravelPackage\Repository;

use Heavykenny\LaravelPackage\RepositoryInterface\LaravelPackageInterface;
use Illuminate\Database\Eloquent\Model;

class LaravelPackageRepository implements LaravelPackageInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Index.
     *
     * @return bool
     */
    public function index()
    {
        return true;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $id
     * @return void
     */
    public function store($id)
    {
        // TODO: Implement update() method
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @return void
     */
    public function update($id)
    {
        // TODO: Implement update() method.
    }

    /**
     * Get all resource from storage.
     *
     * @return void
     */
    public function all()
    {
        // TODO: Implement all() method.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * Get specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function show($id)
    {
        // TODO: Implement show() method.
    }
}

