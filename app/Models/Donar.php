<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    use HasFactory;
    protected $table='donars';
    protected $guarded=[];
//    public function nurse(){
//        return $this->belongsTo(Nurse::class,'nurse_id');
//    }
    public function cpus(){
        return $this->hasOne(Cpu::class,'donar_id');
    }

    public function contacts(){
        return $this->hasOne(Contact::class,'donar_id');
    }
}
