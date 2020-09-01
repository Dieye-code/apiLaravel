<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Client
 * @package App\Models
 * @version August 31, 2020, 2:42 pm UTC
 *
 * @property string $Prenom
 * @property string $Nom
 */
class Client extends Model
{

    public $table = 'clients';
    



    public $fillable = [
        'Prenom',
        'Nom'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Prenom' => 'string',
        'Nom' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Prenom' => 'required',
        'Nom' => 'required'
    ];

    
}
