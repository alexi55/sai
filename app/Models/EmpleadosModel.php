<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadosModel extends Model
{
        //
        protected $table = 'empleados';
    
        protected $primaryKey= 'idemp';
    
        public $timestamps = false;
    
        protected $fillable = [
            'idemp',
            'numfile',
            'nombres',
            'ap_pat',
            'ap_mat',
            'nomcargo',
            'habbasico',
            'ci',
            'sippase',
            'idarea',
            
        ];
    
        protected $guarded = [
    
            
        ];
}
