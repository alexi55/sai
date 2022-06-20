<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
           //
           protected $table = 'file';
    
           protected $primaryKey= 'idfile';
       
           public $timestamps = false;
       
           protected $fillable = [
               'numfile',
               'sueldo',
               'cargofile',
               'tipofile',
               'estadofile',
               'idarea'
               
           ];
       
           protected $guarded = [
       
               
           ];
}
