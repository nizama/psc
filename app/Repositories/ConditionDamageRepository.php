<?php

namespace App\Repositories;

use App\Models\ConditionDamage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConditionDamageRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:35 pm UTC
 *
 * @method ConditionDamage findWithoutFail($id, $columns = ['*'])
 * @method ConditionDamage find($id, $columns = ['*'])
 * @method ConditionDamage first($columns = ['*'])
*/
class ConditionDamageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'condition_id',
        'damage_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConditionDamage::class;
    }
}
