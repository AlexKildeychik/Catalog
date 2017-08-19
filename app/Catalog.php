<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $guarded = [];

    public function path()
    {
        return "/catalog/{$this->category->slug}/{$this->id}";
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function category()
    {
         return $this->belongsTo(Category::class);
    }

    public function addComments($comments)
    {
        $this->comments()->create($comments);
    }
}
