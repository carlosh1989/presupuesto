<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dependencie_id', 'departure_id', 'codigoPresupuestario', 'inicial', 'aumentar', 'disminuir', 'compromisos', 'causados', 'disponibilidad', 'pagado', 'modificado', 'actualizado'];

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
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

}