<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Ciutat extends Model
{
    use HasFactory;

    protected $fillable = [
      'nom',
      'nHabitants'
    ];

    public function casals(): HasMany
    {
        return $this->hasMany(Casal::class, 'ciutatId', 'id');
    }
    public static function allCiutats(){
        return self::all();
    }
}
