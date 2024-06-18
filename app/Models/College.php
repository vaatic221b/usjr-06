<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ['collfullname', 'collshortname'];

    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid');
    }
}