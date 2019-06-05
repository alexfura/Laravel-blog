<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topic';

    CONST created_at = 'created';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Get articles for this topic
     */

    public function articles() {
        return $this->hasMany('App\Article', 'topic');
    }
}
