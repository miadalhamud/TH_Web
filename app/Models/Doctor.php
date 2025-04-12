<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function patients(){
        return $this->belongsToMany(Patient::class , 'appointments');
    }
}
