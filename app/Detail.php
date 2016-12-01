<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'details';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['decree_id', 'departure_id', 'dependence_id', 'codigoPresupuestario', 'monto', 'traslado', 'estado'];

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
    protected $casts = ['traslado' => 'boolean', 'estado' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    public function decree()
    {
        return $this->belongsTo(Decree::class);
    }
}