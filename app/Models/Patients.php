<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function get()
    {
        return $this->all();
    }

    // relationship with appointments
    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }

    // relationship with prescriptions
    public function prescriptions()
    {
        return $this->hasMany(Prescriptions::class);
    }

}
