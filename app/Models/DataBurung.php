<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBurung extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id_burung'
    ];

    public function akunpeternaks()
    {
        return $this->belongsTo(AkunPeternak::class,'id_peternak');
    }
}
