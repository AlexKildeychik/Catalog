<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use RecordsActivity;
    protected $guarded = [];
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
}
