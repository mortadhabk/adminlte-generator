<?php

namespace App\Repositories;

use App\Models\Competance;
use App\Repositories\BaseRepository;

/**
 * Class CompetanceRepository
 * @package App\Repositories
 * @version October 22, 2022, 11:26 am UTC
*/

class CompetanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'rating',
        'profile_id'
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
        return Competance::class;
    }
}
