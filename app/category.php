<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    public $timestamps = true;
    protected $dateFormat = 'U';
    public function setDateAttribute($value)
    {
        $this->attributes['created_at'] = date($value);
    }
}
