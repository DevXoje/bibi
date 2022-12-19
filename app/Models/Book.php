<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /*protected $attributes = [
        "title",
        "subtitle",
        "link",
        "slug",
        "image",
    ];*/
    protected $casts = [
        "title" => "string",
        "subtitle" => "string",
        "link" => "string",
        "image" => "string",
        "slug" => "string"
    ];

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
