<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FacturaDetalle extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function factura(): BelongsTo
    {
        return $this->belongsTo(Factura::class);
    }

    /**
     * @return BelongsTo
     */
    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
