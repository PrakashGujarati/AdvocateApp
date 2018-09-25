<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseReady extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['start_date','end_date','note'];

    public function case()
    {
        return $this->belongsTo(PropertyCase::class);
    }

    public function application()
    {
        return $this->belongsTo(PropertyApplication::class);
    }
}
