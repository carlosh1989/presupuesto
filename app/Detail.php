<?php

namespace App;

use App\Decree;
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
    protected $fillable = ['decree_id', 'partida', 'monto', 'traslado'];

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
    protected $casts = ['traslado' => 'boolean'];

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