<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //apuntar a una tabla primero 
    protected $table ='persona';
    //especificar la clave primeria
    protected $primaryKey='idpersona';
    //deshabilitar marcado de registro
    public $timestamps=false;

    //definir los campos que contendran algun valor
    protected $fillable=[
    	'idpersona',
    	'tipo_persona',
    	'nombre',
        'tipo_documento',
        'num_documento',
        'dirrecion',
        'telefono',
        'email'
    ];
}
