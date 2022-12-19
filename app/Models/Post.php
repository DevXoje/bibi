<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var mixed|string
     */
    public string $title;
    /**
     * @var mixed|string
     */
    public string $content;

    //protected $attributes = [];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return "slug";
    }
}
