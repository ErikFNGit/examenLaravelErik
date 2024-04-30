<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Casal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'dataInici',
        'dataFinal',
        'nPlaces',
        'ciutatId'
    ];

          
    public function ciutat(): BelongsTo
    {
        return $this->belongsTo(Ciutat::class, 'ciutatId', 'id');
    }

    public static function allCasals(){
        return self::all();
    }
    public static function getCasal($id)
    {
        return self::where('id', $id)->first();
    }
}
        


