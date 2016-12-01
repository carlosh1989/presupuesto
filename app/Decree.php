<?php

namespace App;

use App\Departure;
use App\Dependency;
use App\Detail;
use Illuminate\Database\Eloquent\Model;

class Decree extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'decrees';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departure_id', 'dependence_id', 'numero', 'fecha', 'codigoPresupuestario', 'tipoMovimiento', 'descripcion', 'observaciones', 'montoTotal', 'estado'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['estado' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];


    public function dependency()
    {
        return $this->hasOne(Dependency::class);
    }

    public function departure()
    {
        return $this->hasOne(Departure::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
}