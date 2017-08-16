<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $guarded = [];

    public function path()
    {
        return '/catalog/' . $this->id;
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function addComments($comments)
    {
        $this->comments()->create($comments);
    }
}
