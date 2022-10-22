<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Competance
 * @package App\Models
 * @version October 22, 2022, 11:26 am UTC
 *
 * @property string $name
 * @property integer $rating
 * @property integer $profile_id
 */
class Competance extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'competances';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'rating',
        'profile_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'rating' => 'integer',
        'profile_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'rating' => 'min:0|max:10'
    ];

    
}
