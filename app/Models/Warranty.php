<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Warranty
 * @package App\Models
 * @version October 17, 2018, 3:26 pm UTC
 *
 * @property string name
 * @property integer month
 */
class Warranty extends Model
{
    use SoftDeletes;

    public $table = 'warranties';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'month'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'month' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'month' => 'required'
    ];

    
}
