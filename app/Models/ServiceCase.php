<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Case
 * @package App\Models
 * @version October 17, 2018, 3:41 pm UTC
 *
 * @property string serial_code
 * @property string barcode
 * @property string customer_name
 * @property string customer_phone
 * @property string id_card_no
 * @property integer product_id
 * @property integer brand_id
 * @property string model_number
 * @property string serial_number
 * @property string customer_complain
 * @property string reg_counter_checkup
 * @property integer warranty_id
 * @property integer user_id
 * @property integer status_id
 */

class ServiceCase extends Model
{
    use SoftDeletes;

    public $table = 'cases';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'serial_code',
        'barcode',
        'customer_name',
        'customer_phone',
        'id_card_no',
        'product_id',
        'brand_id',
        'model_number',
        'serial_number',
        'customer_complain',
        'reg_counter_checkup',
        'warranty_id',
        'user_id',
        'status_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'serial_code' => 'string',
        'barcode' => 'string',
        'customer_name' => 'string',
        'customer_phone' => 'string',
        'id_card_no' => 'string',
        'product_id' => 'integer',
        'brand_id' => 'integer',
        'model_number' => 'string',
        'serial_number' => 'string',
        'customer_complain' => 'string',
        'reg_counter_checkup' => 'string',
        'warranty_id' => 'integer',
        'user_id' => 'integer',
        'status_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_name' => 'required',
        'customer_phone' => 'required',
        'id_card_no' => 'required',
        'product_id' => 'required',
        'brand_id' => 'required',
        'model_number' => 'required',
        'serial_number' => 'required',
        'customer_complain' => 'required',
        'reg_counter_checkup' => 'required',
        'warranty_id' => 'required',
        'user_id' => 'required',
        'status_id' => 'required'
    ];

    
}
