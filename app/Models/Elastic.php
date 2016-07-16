<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Elastic extends Model
{
    use ElasticquentTrait;

    protected $table = 'articles';

    public function getIndexName()
    {
        return 'article_index';
    }

    public function getTypeName()
    {
        return 'article_type';
    }

}
