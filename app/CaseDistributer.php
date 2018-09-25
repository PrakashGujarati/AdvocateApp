<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseDistributer extends Model
{
    use SoftDeletes; // For Soft Delete

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_cases_id', 'case_processes_id',
    ];

    public function case()
    {
        return $this->belongsTo(PropertyCase::class);
    }

    public function application()
    {
        return $this->belongsTo(PropertyApplication::class);
    }

    public function process()
    {
        return $this->hasMany(CaseProcess::class);
    }
}
