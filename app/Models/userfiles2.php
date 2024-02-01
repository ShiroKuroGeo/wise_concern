<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userfiles2 extends Model
{
    use HasFactory;
    
    protected $fillable = ['tickets_id', 'pictures'];
    
    public function userfiles2s()
    {
        return $this->hasMany(Userfiles2::class, 'tickets_id');
    }
}
