<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'total',
        'fecha',
        'observacion',
    ];

    protected $casts = [
        'fecha' => 'date',
    ];

    /**
     * @return BelongsTo
     */
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    /**
     * @return HasMany
     */
    public function factura_detalles(): HasMany
    {
        return $this->hasMany(FacturaDetalle::class);
    }
}
