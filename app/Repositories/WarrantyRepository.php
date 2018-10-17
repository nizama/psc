<?php

namespace App\Repositories;

use App\Models\Warranty;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WarrantyRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:26 pm UTC
 *
 * @method Warranty findWithoutFail($id, $columns = ['*'])
 * @method Warranty find($id, $columns = ['*'])
 * @method Warranty first($columns = ['*'])
*/
class WarrantyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'month'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Warranty::class;
    }
}
