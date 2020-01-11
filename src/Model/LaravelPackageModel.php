<?php

namespace Heavykenny\LaravelPackage\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaravelPackageModel extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
