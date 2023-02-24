<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = 'productCode' ;
    /**
     * @var bool
     */
    public $incrementing = false ;

    /**
     * @var string
     */
    protected $keyType = 'string' ;

    /**
     * @var bool
     */
    public $timestamps = false ;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['stock_value'];

    /**
     * Determine  full name of user
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function getStockValueAttribute()
    {
        return $this->quantityInStock * $this->MSRP;
    }

    /**
     * Les valeurs par défaut du modèle pour les attributs.
     *
     * @var array
     */
    protected $attributes = [
        'productScale' => '1:10',
    ] ;
}
