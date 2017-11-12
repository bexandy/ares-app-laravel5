<?php

namespace Ares\Models\General;

use Ares\Models\Model;

class TipoAlmacen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tipo_almacen';

    public function almacenes()
    {
        return $this->hasMany(Almacen::class);
    }
}
