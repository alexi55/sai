<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasModel extends Model
{
    protected $table = 'areas';
    
    protected $primaryKey= 'idarea';

    public $timestamps = false;

    protected $fillable = [
        'nombrearea',
        'estadoarea'
    ];

    protected $guarded = [

        
    ];
}
