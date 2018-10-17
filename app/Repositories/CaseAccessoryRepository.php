<?php

namespace App\Repositories;

use App\Models\CaseAccessory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CaseAccessoryRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:30 pm UTC
 *
 * @method CaseAccessory findWithoutFail($id, $columns = ['*'])
 * @method CaseAccessory find($id, $columns = ['*'])
 * @method CaseAccessory first($columns = ['*'])
*/
class CaseAccessoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'case_id',
        'accessory_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CaseAccessory::class;
    }
}
