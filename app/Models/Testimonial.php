<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    use UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'name',
        'image_testimonial',
        'profissao',
        'depoimento',
        'instagram',
    ];



    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
