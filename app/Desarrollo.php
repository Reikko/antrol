<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Desarrollo extends Model
{
    protected $table = 'desarrollos';
    protected $fillable = [
        'id_cdad',
        'nom_des',
        'tipo',
        'unidades',
        'responsable',
        'editar'
    ];

    public static function ndesarrollos($id)
    {
        return Desarrollo::where('id_cdad','=',$id)
            ->get();
    }


}
