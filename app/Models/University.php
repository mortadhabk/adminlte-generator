<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class University
 * @package App\Models
 * @version November 13, 2022, 11:30 am UTC
 *
 * @property string $name
 * @property string $description
 * @property string $place
 * @property integer $profile_id
 */
class University extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'universities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'place',
        'profile_id',
        'image_url',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'place' => 'string',
        'profile_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function profile(){
        return $this->belongsTo(Profile::Class, 'profile_id');
    }
}
