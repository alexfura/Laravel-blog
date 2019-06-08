<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public $timestamps = true;
    CONST CREATED_AT = 'creation_time';

    /**
     * @return mixed
     */

    public function getRouteKey()
    {
        return $this->title;
    }

    /**
     * Get n last records
     * @param int $num
     * @return mixed
     */

    public static function getLastArticles(int $num)
    {
        return Article::latest()->take($num)->get();
    }
}
