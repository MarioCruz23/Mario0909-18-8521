<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class criptomoneda extends Model
{
    use HasFactory;
    
    public function lenguajeprogramacion(){
        return $this->hasMany(lenguajeprogramacion::class, 'id');
    }
}
