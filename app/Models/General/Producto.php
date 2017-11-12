<?php

namespace Ares\Models\General;

use Ares\Models\Model;

class Producto extends Model
{
    public function categoria()
    {
      return $this->belongsTo(Categoria::class);
    }

    public function marca()
    {
      return $this->belongsTo(Marca::class);
    }
}
