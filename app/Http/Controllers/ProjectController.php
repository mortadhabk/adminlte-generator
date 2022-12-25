<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Repositories\ProjectRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Project;
use Illuminate\Http\Request;
use Flash;
use Response;
use Intervention\Image\Facades\Image;

class ProjectController extends AppBaseController
{
    /** @var ProjectRepository $projectRepository*/
    private $projectRepository;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepository = $projectRepo;
    }

    /**
     * Display a listing of the Project.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $projects = Project::with('Profile')->with('Category')->get();
        return view('projects.index')
            ->with('projects', $projects);
    }


    
    public function projectpage($name)
    {
        $projects = Project::where('name',$name)->first();
        return view('projects.projecthome')
            ->with('projects', $projects);
    }
    /**
     * Show the form for creating a new Project.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created Project in storage.
     *
     * @param CreateProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateProjectRequest $request)
    {
        $image = $request->file('image_url');
        $this->validate($request, [
            'image_url' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'required',
            'name' => 'required'
       
        ]);


        $ImageName= time().'.'.$image->getClientOriginalExtension();
        $projectdata = $request->all();
        $projectdata['image_url'] = 'imagets/projects/'.$ImageName;
        $project = $this->projectRepository->create($projectdata);


        $imageInputData = Image::make($image->getRealPath());
        $imageInputData->resize(610, 460)->save('imagets/projects/'.$ImageName);
        Flash::success('Project saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified Project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified Project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified Project in storage.
     *
     * @param int $id
     * @param UpdateProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProjectRequest $request)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }
        if($request->file('image_url') !== null){

            $image = $request->file('image_url');
            $this->validate($request, [
                'image_url' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
                'description' => 'required'
            ]);
            $ImageName= time().'.'.$image->getClientOriginalExtension();
            $projectdata = $request->all();
            $projectdata['image_url'] = 'imagets/projects/'.$ImageName;
            unlink($project->image_url);
            $project = $this->projectRepository->update($projectdata, $id);

            $imageInputData = Image::make($image->getRealPath());
            $imageInputData->resize(610, 460)->save('imagets/projects/'.$ImageName);

            Flash::success('Project updated successfully.');
            return redirect(route('projects.index'));
        }else{
            $input = $request->all();
            $project = $this->projectRepository->update($input, $id);

        }
        $project = $this->projectRepository->update($request->all(), $id);

        Flash::success('Project updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified Project from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $project = $this->projectRepository->find($id);
       unlink($project->image_url);
        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        $this->projectRepository->delete($id);

        Flash::success('Project deleted successfully.');

        return redirect(route('projects.index'));
    }
}
