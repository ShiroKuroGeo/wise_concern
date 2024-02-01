<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userfiles extends Model
{
    use HasFactory;

    protected $fillable = ['joborders_id', 'pictures'];

    public function userfiles()
    {
        return $this->hasMany(Userfiles::class, 'joborders_id');
    }

}
