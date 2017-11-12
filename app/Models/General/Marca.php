<?php

namespace Ares\Models\General;

use Ares\Models\Model;

class Marca extends Model
{
    public function productos()
    {
      return $this->hasMany(Producto::class);
    }
}
