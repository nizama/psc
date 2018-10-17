<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CaseAccessory
 * @package App\Models
 * @version October 17, 2018, 3:30 pm UTC
 *
 * @property integer case_id
 * @property integer accessory_id
 */
class CaseAccessory extends Model
{
    use SoftDeletes;

    public $table = 'case_accessories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'case_id',
        'accessory_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'case_id' => 'integer',
        'accessory_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'case_id' => 'required',
        'accessory_id' => 'required'
    ];

    
}
