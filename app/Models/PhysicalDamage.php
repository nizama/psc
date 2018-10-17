<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PhysicalDamage
 * @package App\Models
 * @version October 17, 2018, 3:44 pm UTC
 *
 * @property integer case_id
 * @property integer condition_damage_id
 */
class PhysicalDamage extends Model
{
    use SoftDeletes;

    public $table = 'physical_damages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'case_id',
        'condition_damage_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'case_id' => 'integer',
        'condition_damage_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'case_id' => 'required',
        'condition_damage_id' => 'required'
    ];

    
}
