<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pareja_Tutor extends Model
{
    protected $table = 'pareja_tutor';

    protected $primaryKey = 'id_pat';

    protected $fillable = [
        'pareja_nombre',
        'pareja_apellido',
        'pareja_dni',
        'pareja_telefono_fijo',
        'pareja_telefono_movil'
    ];

    public function tutores()
    {
        return $this->belongsTo('App\Models\Tutor');
    }
}
