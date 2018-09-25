<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;


class PropertyCase extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['inward_no','inwarddate','property_owner_name','borrower_name','bank_id','bank_manager_name',
        'bank_branch','bank_facilities','property_description','state'];

    public function distributers()
    {
        return $this->hasMany(CaseDistributer::class);
    }

    public function processes()
    {
        return $this->hasMany(CaseProcess::class);
    }
    public function queries()
    {
        return $this->hasMany(CaseQuery::class);
    }
    public function searches()
    {
        return $this->hasMany(CaseSearch::class);
    }
    public function checkings()
    {
        return $this->hasMany(CaseChecking::class);
    }
    public function readies()
    {
        return $this->hasMany(CaseReady::class);
    }
    public function state()
    {
        return $this->belongsTo(CaseState::class);
    }

    public function setInwarddateAttribute($value)
    {
        $this->attributes['inwarddate'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getInwarddateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
