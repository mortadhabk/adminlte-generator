<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Profile
 * @package App\Models
 * @version October 21, 2022, 9:40 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property integer $phone
 */
class Profile extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required'
    ];

    
}
