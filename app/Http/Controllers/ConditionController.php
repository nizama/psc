<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConditionRequest;
use App\Http\Requests\UpdateConditionRequest;
use App\Repositories\ConditionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConditionController extends AppBaseController
{
    /** @var  ConditionRepository */
    private $conditionRepository;

    public function __construct(ConditionRepository $conditionRepo)
    {
        $this->conditionRepository = $conditionRepo;
    }

    /**
     * Display a listing of the Condition.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->conditionRepository->pushCriteria(new RequestCriteria($request));
        $conditions = $this->conditionRepository->all();

        return view('conditions.index')
            ->with('conditions', $conditions);
    }

    /**
     * Show the form for creating a new Condition.
     *
     * @return Response
     */
    public function create()
    {
        return view('conditions.create');
    }

    /**
     * Store a newly created Condition in storage.
     *
     * @param CreateConditionRequest $request
     *
     * @return Response
     */
    public function store(CreateConditionRequest $request)
    {
        $input = $request->all();

        $condition = $this->conditionRepository->create($input);

        Flash::success('Condition saved successfully.');

        return redirect(route('conditions.index'));
    }

    /**
     * Display the specified Condition.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $condition = $this->conditionRepository->findWithoutFail($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        return view('conditions.show')->with('condition', $condition);
    }

    /**
     * Show the form for editing the specified Condition.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $condition = $this->conditionRepository->findWithoutFail($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        return view('conditions.edit')->with('condition', $condition);
    }

    /**
     * Update the specified Condition in storage.
     *
     * @param  int              $id
     * @param UpdateConditionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConditionRequest $request)
    {
        $condition = $this->conditionRepository->findWithoutFail($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        $condition = $this->conditionRepository->update($request->all(), $id);

        Flash::success('Condition updated successfully.');

        return redirect(route('conditions.index'));
    }

    /**
     * Remove the specified Condition from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $condition = $this->conditionRepository->findWithoutFail($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        $this->conditionRepository->delete($id);

        Flash::success('Condition deleted successfully.');

        return redirect(route('conditions.index'));
    }
}
