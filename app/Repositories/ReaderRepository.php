<?php

namespace App\Repositories;

use App\Models\Reader;
use App\Repositories\BaseRepository;

/**
 * Class ReaderRepository
 * @package App\Repositories
 * @version July 11, 2020, 7:05 am UTC
*/

class ReaderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ip',
        'internal_id',
        'com_key',
        'description',
        'soap_port',
        'udp_port',
        'encoding',
        'status'
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
        return Reader::class;
    }
}
