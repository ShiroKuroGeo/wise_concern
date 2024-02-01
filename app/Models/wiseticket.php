<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wiseticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'name',
        'email',
        'deadline',
        'message',
        'status',
        'assignedto',
        'priority'
    ];

    public function wiseticketfiles()
    {
        return $this->hasMany(wiseticketfiles::class, 'wiseticketfiles_id', 'id');
    }

    public function scopeCountByStatusAndDay($query, $status, $day)
    {
        return $query->where('status', $status)
            ->whereDay('created_at', $day)
            ->count();
    }
}
