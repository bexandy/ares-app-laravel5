<?php

namespace Ares\Models\General;

use Ares\Models\Model;

class Categoria extends Model
{
    public function productos()
    {
      return $this->hasMany(Producto::class);
    }
}
