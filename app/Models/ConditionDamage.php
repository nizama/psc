<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ConditionDamage
 * @package App\Models
 * @version October 17, 2018, 3:35 pm UTC
 *
 * @property integer condition_id
 * @property integer damage_id
 */
class ConditionDamage extends Model
{
    use SoftDeletes;

    public $table = 'condition_damages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'condition_id',
        'damage_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'condition_id' => 'integer',
        'damage_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'condition_id' => 'required',
        'damage_id' => 'requied'
    ];

    
}
