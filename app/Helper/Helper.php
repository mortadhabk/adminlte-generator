<?php
namespace App\Helper;
use App\Http\Requests\CreateProjectRequest;
use Intervention\Image\Facades\Image;

class Helper
{

    static function createImageWithResizePicture(CreateProjectRequest $request){
        
        $image = $request->file('image_url');
        $ImageName= time().'.'.$image->getClientOriginalExtension();
        $imageInputData = Image::make($image->getRealPath());
        $imageInputData->resize(610, 460)->save('imagets/projects/'.$ImageName);
 
        return $ImageName;
    }
    static function UpdateImageWithResizePicture(CreateProjectRequest $request){
        
        $image = $request->file('image_url');
        $ImageName= time().'.'.$image->getClientOriginalExtension();
        $imageInputData = Image::make($image->getRealPath());
        $imageInputData->resize(610, 460)->save('imagets/projects/'.$ImageName);
        $projectdata = $request->all();
        $projectdata['image_url'] = 'imagets/projects/'.$imageName;
        return $projectdata;
    }
}