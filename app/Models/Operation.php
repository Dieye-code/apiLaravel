<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Operation
 * @package App\Models
 * @version August 31, 2020, 3:39 pm UTC
 *
 * @property integer $montant
 * @property string $dateOperation
 * @property integer $compteId
 * @property integer $typeOperation_id
 */
class Operation extends Model
{

    public $table = 'operations';
    



    public $fillable = [
        'montant',
        'dateOperation',
        'compteId',
        'typeOperation_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'montant' => 'integer',
        'dateOperation' => 'string',
        'compteId' => 'integer',
        'typeOperation_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
