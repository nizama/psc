<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWarrantyRequest;
use App\Http\Requests\UpdateWarrantyRequest;
use App\Repositories\WarrantyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class WarrantyController extends AppBaseController
{
    /** @var  WarrantyRepository */
    private $warrantyRepository;

    public function __construct(WarrantyRepository $warrantyRepo)
    {
        $this->warrantyRepository = $warrantyRepo;
    }

    /**
     * Display a listing of the Warranty.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->warrantyRepository->pushCriteria(new RequestCriteria($request));
        $warranties = $this->warrantyRepository->all();

        return view('warranties.index')
            ->with('warranties', $warranties);
    }

    /**
     * Show the form for creating a new Warranty.
     *
     * @return Response
     */
    public function create()
    {
        return view('warranties.create');
    }

    /**
     * Store a newly created Warranty in storage.
     *
     * @param CreateWarrantyRequest $request
     *
     * @return Response
     */
    public function store(CreateWarrantyRequest $request)
    {
        $input = $request->all();

        $warranty = $this->warrantyRepository->create($input);

        Flash::success('Warranty saved successfully.');

        return redirect(route('warranties.index'));
    }

    /**
     * Display the specified Warranty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $warranty = $this->warrantyRepository->findWithoutFail($id);

        if (empty($warranty)) {
            Flash::error('Warranty not found');

            return redirect(route('warranties.index'));
        }

        return view('warranties.show')->with('warranty', $warranty);
    }

    /**
     * Show the form for editing the specified Warranty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $warranty = $this->warrantyRepository->findWithoutFail($id);

        if (empty($warranty)) {
            Flash::error('Warranty not found');

            return redirect(route('warranties.index'));
        }

        return view('warranties.edit')->with('warranty', $warranty);
    }

    /**
     * Update the specified Warranty in storage.
     *
     * @param  int              $id
     * @param UpdateWarrantyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWarrantyRequest $request)
    {
        $warranty = $this->warrantyRepository->findWithoutFail($id);

        if (empty($warranty)) {
            Flash::error('Warranty not found');

            return redirect(route('warranties.index'));
        }

        $warranty = $this->warrantyRepository->update($request->all(), $id);

        Flash::success('Warranty updated successfully.');

        return redirect(route('warranties.index'));
    }

    /**
     * Remove the specified Warranty from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $warranty = $this->warrantyRepository->findWithoutFail($id);

        if (empty($warranty)) {
            Flash::error('Warranty not found');

            return redirect(route('warranties.index'));
        }

        $this->warrantyRepository->delete($id);

        Flash::success('Warranty deleted successfully.');

        return redirect(route('warranties.index'));
    }
}
