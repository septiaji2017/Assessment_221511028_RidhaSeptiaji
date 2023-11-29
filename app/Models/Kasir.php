<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir'; 
    protected $primaryKey = 'KodeKasir';
    public $incrementing = false;
    protected $fillable = ['KodeKasir', 'Nama', 'HP'];

    public function notas()
    {
        return $this->hasMany(Nota::class, 'KodeKasir', 'KodeKasir');
    }
}
