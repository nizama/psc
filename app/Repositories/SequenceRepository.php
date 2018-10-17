<?php

namespace App\Repositories;

use App\Models\Sequence;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SequenceRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:34 pm UTC
 *
 * @method Sequence findWithoutFail($id, $columns = ['*'])
 * @method Sequence find($id, $columns = ['*'])
 * @method Sequence first($columns = ['*'])
*/
class SequenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'data_type',
        'current_number',
        'prefix',
        'postfix',
        'template',
        'date',
        'initial_number',
        'reset_by',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sequence::class;
    }
}
