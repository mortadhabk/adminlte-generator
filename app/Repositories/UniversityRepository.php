<?php

namespace App\Repositories;

use App\Models\University;
use App\Repositories\BaseRepository;

/**
 * Class UniversityRepository
 * @package App\Repositories
 * @version November 13, 2022, 11:30 am UTC
*/

class UniversityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'place',
        'image_url'
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
        return University::class;
    }
}
