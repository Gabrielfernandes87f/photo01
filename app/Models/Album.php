<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 *
 * @property $id
 * @property $name
 * @property $category
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Category[] $categories
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Album extends Model
{
    use HasFactory;
    use UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';



    static $rules = [
		'name' => 'required',
		'category' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','category','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'album_id', 'id');
    }


}
