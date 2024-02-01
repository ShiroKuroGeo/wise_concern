<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wiserequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'name',
        'email',
        'concern',
        'message',
        'status',
        'assignedto',
        'priority',
    ];

    public function wiserequestfiles()
    {
        return $this->hasMany(wiserequestfiles::class, 'wiserequestfiles_id', 'id');
    }

    public function scopeCountByStatusAndDay($query, $status, $day)
    {
        return $query->where('status', $status)
            ->whereDay('created_at', $day)
            ->count();
    }
}
