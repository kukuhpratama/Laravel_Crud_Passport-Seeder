<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
     /** 
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $fillable = [
        'employee_name', 'employee_salary', 'employee_age','profile_image'
    ];
}
