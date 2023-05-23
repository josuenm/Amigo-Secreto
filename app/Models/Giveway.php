<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giveway extends Model
{
    use HasFactory;

    public function personX()
    {
        return $this->belongsTo(Person::class, 'person_x_id');
    }

    public function personY()
    {
        return $this->belongsTo(Person::class, 'person_y_id');
    }
}
