<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'index_number'
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class, 'student_id');
    }

}
