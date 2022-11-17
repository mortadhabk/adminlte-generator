<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Project
 * @package App\Models
 * @version October 22, 2022, 12:34 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property integer $profile_id
 */
class Project extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'profile_id',
        'image_url',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'profile_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'unique'
    ];
  

    public function profile(){
        return $this->belongsTo(Profile::Class, 'profile_id');
    }
    public function category(){
        return $this->belongsTo(Category::Class, 'category_id');
    }
}
