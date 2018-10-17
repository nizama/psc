<?php

namespace App\Repositories;

use App\Models\ServiceCase;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CaseRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:41 pm UTC
 *
 * @method Case findWithoutFail($id, $columns = ['*'])
 * @method Case find($id, $columns = ['*'])
 * @method Case first($columns = ['*'])
*/
class CaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return ServiceCase::class;
    }
}
