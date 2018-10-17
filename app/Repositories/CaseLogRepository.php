<?php

namespace App\Repositories;

use App\Models\CaseLog;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CaseLogRepository
 * @package App\Repositories
 * @version October 17, 2018, 3:46 pm UTC
 *
 * @method CaseLog findWithoutFail($id, $columns = ['*'])
 * @method CaseLog find($id, $columns = ['*'])
 * @method CaseLog first($columns = ['*'])
*/
class CaseLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'case_id',
        'user_id',
        'comment'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CaseLog::class;
    }
}
