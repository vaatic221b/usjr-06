<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $primaryKey = 'collid';
    
    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid', 'collid');
    }
}