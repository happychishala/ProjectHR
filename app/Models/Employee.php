<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['firstname','lastname','address','email','nrc','position','mobile','deptID','gender','maritalStatus'];

    public function leave()
    {
        return $this->hasMany(Leave::class);
    }
    public function payroll()
    {
        return $this->hasOne(Payroll::class);
    }
}
