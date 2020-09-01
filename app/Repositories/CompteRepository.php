<?php

namespace App\Repositories;

use App\Models\Compte;
use App\Repositories\BaseRepository;

/**
 * Class CompteRepository
 * @package App\Repositories
 * @version August 31, 2020, 3:33 pm UTC
*/

class CompteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'solde',
        'client_id'
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
        return Compte::class;
    }
}
