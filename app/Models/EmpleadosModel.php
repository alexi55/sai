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
            
            'numfile',
            'nombres',
            'ap_pat',
            'ap_mat',
            'cargo',
            'nombrecargo',
            'habbasico',
            'categoria',
            'nivadmin',
            'clase',
            'nivsalarial',
            'fechingreso',
            'natalicio',
            'edad',
            'ci',
            'poai',
            'exppoai',
            'decjurada',
            'expdecjurada',
            'sippase',
            'expsippase',
            'servmilitar',
            'idioma',
            'induccion',
            'expinduccion',
            'progvacacion',
            'expprogvacacion',
            'vacganadas',
            'vacpendientes',
            'vacusasdas',
            'segsalud',
            'inamovilidad',
            'aservicios',
            'cvitae',
            'telefono',
            'biometrico',
            'gradacademico',
            'rae',
            'regprofesional',
            'evdesempenio',
            'idfile',
            'idarea'
                      
        ];
    
        protected $guarded = [
    
            
        ];
      
}
