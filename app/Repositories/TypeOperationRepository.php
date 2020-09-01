<?php

namespace App\Repositories;

use App\Models\TypeOperation;
use App\Repositories\BaseRepository;

/**
 * Class TypeOperationRepository
 * @package App\Repositories
 * @version August 31, 2020, 3:35 pm UTC
*/

class TypeOperationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle'
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
        return TypeOperation::class;
    }
}
