<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocOrdenModel extends Model
{
    protected $table = 'docorden';
    
    protected $primaryKey= 'iddoc';

    public $timestamps = false;

    protected $fillable = [
        'nombredoc',
        'estadodoc'
    ];

    protected $guarded = [

        
    ];
}
