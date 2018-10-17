<?php

namespace App\Repositories;

use App\Models\Accessory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AccessoryRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:18 pm UTC
 *
 * @method Accessory findWithoutFail($id, $columns = ['*'])
 * @method Accessory find($id, $columns = ['*'])
 * @method Accessory first($columns = ['*'])
*/
class AccessoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Accessory::class;
    }
}
