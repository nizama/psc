<?php

namespace App\Repositories;

use App\Models\Status;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StatusRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:20 pm UTC
 *
 * @method Status findWithoutFail($id, $columns = ['*'])
 * @method Status find($id, $columns = ['*'])
 * @method Status first($columns = ['*'])
*/
class StatusRepository extends BaseRepository
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
        return Status::class;
    }
}
