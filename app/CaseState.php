<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseState extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function cases()
    {
        return $this->hasMany(PropertyCase::class);
    }

    public function application()
    {
        return $this->belongsTo(PropertyApplication::class);
    }
}
