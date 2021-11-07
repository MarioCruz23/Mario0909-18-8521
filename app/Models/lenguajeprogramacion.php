<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lenguajeprogramacion extends Model
{
    use HasFactory;
    
    public function criptomoneda(){
        return $this->hasMany(criptomoneda::class, 'id');
    }
}
