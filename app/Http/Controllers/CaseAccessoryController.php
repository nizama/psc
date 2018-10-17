<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaseAccessoryRequest;
use App\Http\Requests\UpdateCaseAccessoryRequest;
use App\Repositories\CaseAccessoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CaseAccessoryController extends AppBaseController
{
    /** @var  CaseAccessoryRepository */
    private $caseAccessoryRepository;

    public function __construct(CaseAccessoryRepository $caseAccessoryRepo)
    {
        $this->caseAccessoryRepository = $caseAccessoryRepo;
    }

    /**
     * Display a listing of the CaseAccessory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->caseAccessoryRepository->pushCriteria(new RequestCriteria($request));
        $caseAccessories = $this->caseAccessoryRepository->all();

        return view('case_accessories.index')
            ->with('caseAccessories', $caseAccessories);
    }

    /**
     * Show the form for creating a new CaseAccessory.
     *
     * @return Response
     */
    public function create()
    {
        return view('case_accessories.create');
    }

    /**
     * Store a newly created CaseAccessory in storage.
     *
     * @param CreateCaseAccessoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCaseAccessoryRequest $request)
    {
        $input = $request->all();

        $caseAccessory = $this->caseAccessoryRepository->create($input);

        Flash::success('Case Accessory saved successfully.');

        return redirect(route('caseAccessories.index'));
    }

    /**
     * Display the specified CaseAccessory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caseAccessory = $this->caseAccessoryRepository->findWithoutFail($id);

        if (empty($caseAccessory)) {
            Flash::error('Case Accessory not found');

            return redirect(route('caseAccessories.index'));
        }

        return view('case_accessories.show')->with('caseAccessory', $caseAccessory);
    }

    /**
     * Show the form for editing the specified CaseAccessory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caseAccessory = $this->caseAccessoryRepository->findWithoutFail($id);

        if (empty($caseAccessory)) {
            Flash::error('Case Accessory not found');

            return redirect(route('caseAccessories.index'));
        }

        return view('case_accessories.edit')->with('caseAccessory', $caseAccessory);
    }

    /**
     * Update the specified CaseAccessory in storage.
     *
     * @param  int              $id
     * @param UpdateCaseAccessoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaseAccessoryRequest $request)
    {
        $caseAccessory = $this->caseAccessoryRepository->findWithoutFail($id);

        if (empty($caseAccessory)) {
            Flash::error('Case Accessory not found');

            return redirect(route('caseAccessories.index'));
        }

        $caseAccessory = $this->caseAccessoryRepository->update($request->all(), $id);

        Flash::success('Case Accessory updated successfully.');

        return redirect(route('caseAccessories.index'));
    }

    /**
     * Remove the specified CaseAccessory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caseAccessory = $this->caseAccessoryRepository->findWithoutFail($id);

        if (empty($caseAccessory)) {
            Flash::error('Case Accessory not found');

            return redirect(route('caseAccessories.index'));
        }

        $this->caseAccessoryRepository->delete($id);

        Flash::success('Case Accessory deleted successfully.');

        return redirect(route('caseAccessories.index'));
    }
}
