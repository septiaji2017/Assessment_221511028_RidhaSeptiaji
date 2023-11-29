<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $primaryKey = 'KodeNota';
    public $incrementing = false; 

    protected $table = 'nota';
    protected $fillable = [
        'KodeNota', 'KodeTenan', 'KodeKasir', 'TglNota', 'JamNota', 'JumlahBelanja', 'diskon', 'total',
    ];

    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'KodeTenan', 'KodeTenan');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'KodeKasir', 'KodeKasir');
    }
}
