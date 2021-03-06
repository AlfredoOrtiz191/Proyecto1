<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provedor extends Model
{
    use HasFactory;
    protected $table = "provedores";
    protected $fillable =[
        'name',
        'email',
        'telefono',
        'foto'];
}
