<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'concern',
        'status',
        'message',
        'assignedto',
        'priority',
    ];

    public function userfiles2s()
    {
        return $this->hasMany(Userfiles2::class, 'tickets_id', 'id');
    }
}
