<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];

    public function scopeFullnameSearch($query,$fullname){
        if(!empty($fullname)){
            $query->where('fullname','like','%'.$fullname.'%');
        }
    }

    public function scopeGenderSearch($query,$gender){
        if(!empty($gender)){
            $query->where('gender',$gender);
        }
    }

    public function scopeStartDateSearch($query,$startDate){
        if(!empty($startDate)){
            $query->whereDate('created_at', '>=', $startDate);
        }
    }

    public function scopeEndDateSearch($query,$endDate){
        if(!empty($endDate)){
            $query->whereDate('created_at', '<=', $endDate);
        }
    }

    public function scopeEmailSearch($query,$email){
        if(!empty($email)){
            $query->where('email',$email);
        }
    }
}
