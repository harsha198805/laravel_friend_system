<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* class Invite extends Model
{
    use HasFactory;
} */
class Invite extends Model
{
    protected $fillable=[
      'email',
      'token'
    ];
}
