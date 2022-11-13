<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompetanceRequest;
use App\Http\Requests\UpdateCompetanceRequest;
use App\Repositories\CompetanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Competance;
use Flash;
use Response;
use Intervention\Image\Facades\Image;

class CompetanceController extends AppBaseController
{
    /** @var CompetanceRepository $competanceRepository*/
    private $competanceRepository;

    public function __construct(CompetanceRepository $competanceRepo)
    {
        $this->competanceRepository = $competanceRepo;
    }

    /**
     * Display a listing of the Competance.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $competances = Competance::with('Profile')->get();

        return view('competances.index')
            ->with('competances', $competances);
    }

    /**
     * Show the form for creating a new Competance.
     *
     * @return Response
     */
    public function create()
    {
        return view('competances.create');
    }

    /**
     * Store a newly created Competance in storage.
     *
     * @param CreateCompetanceRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       
        $image = $request->file('image_url');
        $fileName = "img-".uniqid().".". strtolower($image->getClientOriginalExtension());
        $image->move('imagets',$fileName);
        $input = $request->all();
        $input['image_url'] = 'imagets/'.$fileName;
        $competance = $this->competanceRepository->create($input);

        Flash::success('Competance saved successfully.');

        return redirect(route('competances.index'));
    }

    /**
     * Display the specified Competance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $competance = $this->competanceRepository->find($id);

        if (empty($competance)) {
            Flash::error('Competance not found');

            return redirect(route('competances.index'));
        }

        return view('competances.show')->with('competance', $competance);
    }

    /**
     * Show the form for editing the specified Competance.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $competance = $this->competanceRepository->find($id);

        if (empty($competance)) {
            Flash::error('Competance not found');

            return redirect(route('competances.index'));
        }

        return view('competances.edit')->with('competance', $competance);
    }

    /**
     * Update the specified Competance in storage.
     *
     * @param int $id
     * @param UpdateCompetanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompetanceRequest $request)
    {
        $competance = $this->competanceRepository->find($id);

        if (empty($competance)) {
            Flash::error('Competance not found');
            return redirect(route('competances.index'));
        }
        if($request->file('image_url') !== null){
            $image = $request->file('image_url');
            $fileName = "img-".uniqid().".". strtolower($image->getClientOriginalExtension());
            $image->move('imagets',$fileName);
            $input = $request->all();
            $input['image_url'] = 'imagets/'.$fileName;
    
            $competance = $this->competanceRepository->update($input, $id);
            Flash::success('Competance updated successfully.');
            return redirect(route('competances.index'));
        }else{
            $input = $request->all();
            unset($input['image_url']) ;
            $competance = $this->competanceRepository->update($input, $id);
            Flash::success('Competance updated successfully.');
            return redirect(route('competances.index'));
        }


    }

    /**
     * Remove the specified Competance from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $competance = $this->competanceRepository->find($id);

        if (empty($competance)) {
            Flash::error('Competance not found');

            return redirect(route('competances.index'));
        }

        $this->competanceRepository->delete($id);

        Flash::success('Competance deleted successfully.');

        return redirect(route('competances.index'));
    }
}