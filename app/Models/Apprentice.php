<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'cell_number'];

    public function computers(){
        return $this->hasMany(Computer::class);
    }

    public function curse(){
        return $this->belongsTO(Curse::class);
    }

    protected $table = 'apprentices';
}
