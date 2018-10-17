<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CaseLog
 * @package App\Models
 * @version October 17, 2018, 3:46 pm UTC
 *
 * @property integer case_id
 * @property integer user_id
 * @property string comment
 */
class CaseLog extends Model
{
    use SoftDeletes;

    public $table = 'case_logs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'case_id',
        'user_id',
        'comment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'case_id' => 'integer',
        'user_id' => 'integer',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'case_id' => 'required',
        'user_id' => 'required',
        'comment' => 'required'
    ];

    
}
