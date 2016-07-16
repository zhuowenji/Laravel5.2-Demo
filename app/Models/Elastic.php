<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Elastic extends Model
{
    use ElasticquentTrait;

    protected $table = 'elastics';

    public function getIndexName()
    {
        return 'elastic';
    }

    public function getTypeName()
    {
        return 'elastic_type';
    }

}
