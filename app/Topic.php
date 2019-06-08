<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Topic extends Model
{
    protected $table = 'topic';


    CONST CREATED_AT = 'created';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Get articles for this topic
     */

    public function articles() {
        return $this->hasMany('App\Article', 'topic');
    }

    public function getRouteKeyName()
    {
        return Str::slug($this->title);
    }
}
