<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    protected $table = 'tenan'; 
    protected $primaryKey = 'KodeTenan';
    public $incrementing = false;
    protected $fillable = ['KodeTenan', 'NamaTenan', 'HP'];

    public function notas()
    {
        return $this->hasMany(Nota::class, 'KodeTenan', 'KodeTenan');
    }
}
