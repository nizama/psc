<?php

namespace App\Repositories;

use App\Models\Condition;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConditionRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:24 pm UTC
 *
 * @method Condition findWithoutFail($id, $columns = ['*'])
 * @method Condition find($id, $columns = ['*'])
 * @method Condition first($columns = ['*'])
*/
class ConditionRepository extends BaseRepository
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
        return Condition::class;
    }
}
