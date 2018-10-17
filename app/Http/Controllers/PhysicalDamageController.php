<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhysicalDamageRequest;
use App\Http\Requests\UpdatePhysicalDamageRequest;
use App\Repositories\PhysicalDamageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PhysicalDamageController extends AppBaseController
{
    /** @var  PhysicalDamageRepository */
    private $physicalDamageRepository;

    public function __construct(PhysicalDamageRepository $physicalDamageRepo)
    {
        $this->physicalDamageRepository = $physicalDamageRepo;
    }

    /**
     * Display a listing of the PhysicalDamage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->physicalDamageRepository->pushCriteria(new RequestCriteria($request));
        $physicalDamages = $this->physicalDamageRepository->all();

        return view('physical_damages.index')
            ->with('physicalDamages', $physicalDamages);
    }

    /**
     * Show the form for creating a new PhysicalDamage.
     *
     * @return Response
     */
    public function create()
    {
        return view('physical_damages.create');
    }

    /**
     * Store a newly created PhysicalDamage in storage.
     *
     * @param CreatePhysicalDamageRequest $request
     *
     * @return Response
     */
    public function store(CreatePhysicalDamageRequest $request)
    {
        $input = $request->all();

        $physicalDamage = $this->physicalDamageRepository->create($input);

        Flash::success('Physical Damage saved successfully.');

        return redirect(route('physicalDamages.index'));
    }

    /**
     * Display the specified PhysicalDamage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $physicalDamage = $this->physicalDamageRepository->findWithoutFail($id);

        if (empty($physicalDamage)) {
            Flash::error('Physical Damage not found');

            return redirect(route('physicalDamages.index'));
        }

        return view('physical_damages.show')->with('physicalDamage', $physicalDamage);
    }

    /**
     * Show the form for editing the specified PhysicalDamage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $physicalDamage = $this->physicalDamageRepository->findWithoutFail($id);

        if (empty($physicalDamage)) {
            Flash::error('Physical Damage not found');

            return redirect(route('physicalDamages.index'));
        }

        return view('physical_damages.edit')->with('physicalDamage', $physicalDamage);
    }

    /**
     * Update the specified PhysicalDamage in storage.
     *
     * @param  int              $id
     * @param UpdatePhysicalDamageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhysicalDamageRequest $request)
    {
        $physicalDamage = $this->physicalDamageRepository->findWithoutFail($id);

        if (empty($physicalDamage)) {
            Flash::error('Physical Damage not found');

            return redirect(route('physicalDamages.index'));
        }

        $physicalDamage = $this->physicalDamageRepository->update($request->all(), $id);

        Flash::success('Physical Damage updated successfully.');

        return redirect(route('physicalDamages.index'));
    }

    /**
     * Remove the specified PhysicalDamage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $physicalDamage = $this->physicalDamageRepository->findWithoutFail($id);

        if (empty($physicalDamage)) {
            Flash::error('Physical Damage not found');

            return redirect(route('physicalDamages.index'));
        }

        $this->physicalDamageRepository->delete($id);

        Flash::success('Physical Damage deleted successfully.');

        return redirect(route('physicalDamages.index'));
    }
}
