<?php

namespace Heavykenny\LaravelPackage\RepositoryInterface;

use Illuminate\Http\Response;

interface LaravelPackageInterface
{
    /**
     * Store a newly created resource in storage.
     *
     * @param $id
     * @return Response
     */
    public function store($id);

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @return Response
     */
    public function update($id);

    /**
     * Get all resource from storage.
     *
     * @return Response
     */
    public function all();

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function delete($id);

    /**
     * Get specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function show($id);
}
