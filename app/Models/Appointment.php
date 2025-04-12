<?php

namespace App\Models;

    
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id' , 'created_at' , 'updated_at'
    ];

    public function patient()  {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()  {
        return $this->belongsTo(Doctor::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }

}
