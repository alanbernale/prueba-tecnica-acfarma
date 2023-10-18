<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'descripcion',
        'precio',
    ];

    /**
     * @return HasMany
     */
    public function factura_detalles(): HasMany
    {
        return $this->hasMany(FacturaDetalle::class);
    }
}
