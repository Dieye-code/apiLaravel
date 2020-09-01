<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class TypeOperation
 * @package App\Models
 * @version August 31, 2020, 3:35 pm UTC
 *
 * @property string $libelle
 */
class TypeOperation extends Model
{

    public $table = 'type_operations';
    



    public $fillable = [
        'libelle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required'
    ];

    
}
