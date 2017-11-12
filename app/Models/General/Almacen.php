<?php

namespace Ares\Models\General;

use Ares\Models\Model;

class Almacen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'almacenes';

    public function tipo()
    {
        return $this->belongsTo(TipoAlmacen::class, 'tipo_almacen_id');
    }
}
