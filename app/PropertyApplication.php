<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PropertyApplication extends Model
{
    protected $fillable = ['property_case_id','sub_registrar','applicant_name','applicant_address','dastavej_details','dastavej_lakhiapnar','dastavej_lakhilenar','property_description','property_address_office','dastavej_date','search_year_from','search_year_upto','search_application_no','search_fee','actual_payment','extra_expense','payment_details','note','user_id'];

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

    public function setDastavejDateAttribute($value)
    {
        $this->attributes['dastavej_date'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getDastavejDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setSearchYearFromAttribute($value)
    {
        $this->attributes['search_year_from'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getSearchYearFromAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function setSearchYearUptoAttribute($value)
    {
        $this->attributes['search_year_upto'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getSearchYearUptoAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
