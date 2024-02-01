<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wiseticketfiles extends Model
{
    use HasFactory;
    
    protected $fillable = ['wiseticketfiles_id', 'pictures'];
}
