<?php

namespace App\Repositories;

use App\Models\PhysicalDamage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PhysicalDamageRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:44 pm UTC
 *
 * @method PhysicalDamage findWithoutFail($id, $columns = ['*'])
 * @method PhysicalDamage find($id, $columns = ['*'])
 * @method PhysicalDamage first($columns = ['*'])
*/
class PhysicalDamageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'case_id',
        'condition_damage_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PhysicalDamage::class;
    }
}
