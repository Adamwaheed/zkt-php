<?php

namespace App\Repositories;

use App\Models\SystemLog;
use App\Repositories\BaseRepository;

/**
 * Class SystemLogRepository
 * @package App\Repositories
 * @version July 11, 2020, 8:39 am UTC
*/

class SystemLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'message'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SystemLog::class;
    }
}
