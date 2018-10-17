<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConditionDamageRequest;
use App\Http\Requests\UpdateConditionDamageRequest;
use App\Repositories\ConditionDamageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConditionDamageController extends AppBaseController
{
    /** @var  ConditionDamageRepository */
    private $conditionDamageRepository;

    public function __construct(ConditionDamageRepository $conditionDamageRepo)
    {
        $this->conditionDamageRepository = $conditionDamageRepo;
    }

    /**
     * Display a listing of the ConditionDamage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->conditionDamageRepository->pushCriteria(new RequestCriteria($request));
        $conditionDamages = $this->conditionDamageRepository->all();

        return view('condition_damages.index')
            ->with('conditionDamages', $conditionDamages);
    }

    /**
     * Show the form for creating a new ConditionDamage.
     *
     * @return Response
     */
    public function create()
    {
        return view('condition_damages.create');
    }

    /**
     * Store a newly created ConditionDamage in storage.
     *
     * @param CreateConditionDamageRequest $request
     *
     * @return Response
     */
    public function store(CreateConditionDamageRequest $request)
    {
        $input = $request->all();

        $conditionDamage = $this->conditionDamageRepository->create($input);

        Flash::success('Condition Damage saved successfully.');

        return redirect(route('conditionDamages.index'));
    }

    /**
     * Display the specified ConditionDamage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conditionDamage = $this->conditionDamageRepository->findWithoutFail($id);

        if (empty($conditionDamage)) {
            Flash::error('Condition Damage not found');

            return redirect(route('conditionDamages.index'));
        }

        return view('condition_damages.show')->with('conditionDamage', $conditionDamage);
    }

    /**
     * Show the form for editing the specified ConditionDamage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conditionDamage = $this->conditionDamageRepository->findWithoutFail($id);

        if (empty($conditionDamage)) {
            Flash::error('Condition Damage not found');

            return redirect(route('conditionDamages.index'));
        }

        return view('condition_damages.edit')->with('conditionDamage', $conditionDamage);
    }

    /**
     * Update the specified ConditionDamage in storage.
     *
     * @param  int              $id
     * @param UpdateConditionDamageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConditionDamageRequest $request)
    {
        $conditionDamage = $this->conditionDamageRepository->findWithoutFail($id);

        if (empty($conditionDamage)) {
            Flash::error('Condition Damage not found');

            return redirect(route('conditionDamages.index'));
        }

        $conditionDamage = $this->conditionDamageRepository->update($request->all(), $id);

        Flash::success('Condition Damage updated successfully.');

        return redirect(route('conditionDamages.index'));
    }

    /**
     * Remove the specified ConditionDamage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conditionDamage = $this->conditionDamageRepository->findWithoutFail($id);

        if (empty($conditionDamage)) {
            Flash::error('Condition Damage not found');

            return redirect(route('conditionDamages.index'));
        }

        $this->conditionDamageRepository->delete($id);

        Flash::success('Condition Damage deleted successfully.');

        return redirect(route('conditionDamages.index'));
    }
}
