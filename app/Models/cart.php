<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 *
 * @property $id
 * @property $images_id
 * @property $comentario
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Image $image
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cart extends Model
{

    use HasFactory;
    use UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    static $rules = [
		'images_id' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['images_id','comentario','valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function image()
    {
        return $this->hasOne('App\Models\Image', 'id', 'images_id');
    }


}
