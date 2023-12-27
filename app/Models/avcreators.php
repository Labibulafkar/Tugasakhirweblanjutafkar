<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avcreators extends Model
{
    use HasFactory;
    protected $table = 'avcreators';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['nama', 'notel', 'id', 'jk', 'acara', 'alamat', 'foto'];
}
