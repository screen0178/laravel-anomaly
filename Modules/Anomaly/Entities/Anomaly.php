<?php

namespace Modules\Anomaly\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int        $seg_id
 * @property int        $anomaly
 */
class Anomaly extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anomaly';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seg_id', 'km0', 'km1', 'len', 'sf', 's', 'm_ax', 'm_ay', 'm_az', 'ma', 'v_ax', 'v_ay', 'v_az', 'va', 'scores', 'anomaly'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'seg_id' => 'int', 'anomaly' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
