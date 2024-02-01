<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joborder extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'status',
        'deadline',
        'message',
        'assignedto',
        'priority'
    ];
    
    public function userfiles()
    {
        return $this->hasMany(Userfiles::class, 'joborders_id', 'id');
    }
}
