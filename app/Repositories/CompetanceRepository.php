<?php

namespace App\Repositories;

use App\Models\Competance;
use App\Repositories\BaseRepository;

/**
 * Class CompetanceRepository
 * @package App\Repositories
 * @version October 22, 2022, 11:26 am UTC
*/

class CompetanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'rating',
        'profile_id',
        'image_url'
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
        return Competance::class;
    }
  
    public function createPost(Request $request){
        $file = $request->file('image_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$extension;
        $img = Image::make($file)->insert(public_path('logo.JPG'));
        $img->save(public_path($path));

        $input = $request->all();
        $input['image_url'] = $path;
       
        return $this->create($input);
    }
}
