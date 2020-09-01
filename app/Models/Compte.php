<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Compte
 * @package App\Models
 * @version August 31, 2020, 3:33 pm UTC
 *
 * @property string $numero
 * @property integer $solde
 * @property integer $client_id
 */
class Compte extends Model
{

    public $table = 'comptes';
    



    public $fillable = [
        'numero',
        'solde',
        'client_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'string',
        'solde' => 'integer',
        'client_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
