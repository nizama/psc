<?php

namespace App\Repositories;

use App\Models\Damage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DamageRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:24 pm UTC
 *
 * @method Damage findWithoutFail($id, $columns = ['*'])
 * @method Damage find($id, $columns = ['*'])
 * @method Damage first($columns = ['*'])
*/
class DamageRepository extends BaseRepository
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
        return Damage::class;
    }
}
