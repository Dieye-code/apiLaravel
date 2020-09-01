<?php

namespace App\Repositories;

use App\Models\Operation;
use App\Repositories\BaseRepository;

/**
 * Class OperationRepository
 * @package App\Repositories
 * @version August 31, 2020, 3:39 pm UTC
*/

class OperationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'montant',
        'dateOperation',
        'compteId',
        'typeOperation_id'
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
        return Operation::class;
    }
}
