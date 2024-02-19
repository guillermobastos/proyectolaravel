<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Anime
 *
 * @property $anime_id
 * @property $nombreAnime
 * @property $duracion
 * @property $descripcion
 * @property $valoracion
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Anime extends Model
{

    static $rules = [
		'categoria_id' => 'required',
		'nombreAnime' => 'required',
		'duracion' => 'required',
		'descripcion' => 'required',
		'valoracion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombreAnime','duracion','descripcion','valoracion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }


}
