<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sequence
 * @package App\Models
 * @version October 17, 2018, 3:34 pm UTC
 *
 * @property string data_type
 * @property integer current_number
 * @property string prefix
 * @property string postfix
 * @property string template
 * @property string date
 * @property integer initial_number
 * @property string reset_by
 * @property string type
 */
class Sequence extends Model
{
    use SoftDeletes;

    public $table = 'sequences';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'data_type',
        'current_number',
        'prefix',
        'postfix',
        'template',
        'date',
        'initial_number',
        'reset_by',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'data_type' => 'string',
        'current_number' => 'integer',
        'prefix' => 'string',
        'postfix' => 'string',
        'template' => 'string',
        'date' => 'string',
        'initial_number' => 'integer',
        'reset_by' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data_type' => 'required',
        'current_number' => 'required',
        'prefix' => 'required',
        'postfix' => 'required',
        'template' => 'required',
        'date' => 'required',
        'initial_number' => 'required',
        'reset_by' => 'required',
        'type' => 'required'
    ];

    
}
