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
}
