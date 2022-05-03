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
            'idarea',
            'nombres',
            'ap_pat',
            'ap_mat',
            'ci',
            'f_nac',
            'sexo',
            'telefono',
            'correo',
            'estado',
            'estadou'
        ];
    
        protected $guarded = [
    
            
        ];
}
