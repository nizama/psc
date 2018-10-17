<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaseLogRequest;
use App\Http\Requests\UpdateCaseLogRequest;
use App\Repositories\CaseLogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CaseLogController extends AppBaseController
{
    /** @var  CaseLogRepository */
    private $caseLogRepository;

    public function __construct(CaseLogRepository $caseLogRepo)
    {
        $this->caseLogRepository = $caseLogRepo;
    }

    /**
     * Display a listing of the CaseLog.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->caseLogRepository->pushCriteria(new RequestCriteria($request));
        $caseLogs = $this->caseLogRepository->all();

        return view('case_logs.index')
            ->with('caseLogs', $caseLogs);
    }

    /**
     * Show the form for creating a new CaseLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('case_logs.create');
    }

    /**
     * Store a newly created CaseLog in storage.
     *
     * @param CreateCaseLogRequest $request
     *
     * @return Response
     */
    public function store(CreateCaseLogRequest $request)
    {
        $input = $request->all();

        $caseLog = $this->caseLogRepository->create($input);

        Flash::success('Case Log saved successfully.');

        return redirect(route('caseLogs.index'));
    }

    /**
     * Display the specified CaseLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caseLog = $this->caseLogRepository->findWithoutFail($id);

        if (empty($caseLog)) {
            Flash::error('Case Log not found');

            return redirect(route('caseLogs.index'));
        }

        return view('case_logs.show')->with('caseLog', $caseLog);
    }

    /**
     * Show the form for editing the specified CaseLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caseLog = $this->caseLogRepository->findWithoutFail($id);

        if (empty($caseLog)) {
            Flash::error('Case Log not found');

            return redirect(route('caseLogs.index'));
        }

        return view('case_logs.edit')->with('caseLog', $caseLog);
    }

    /**
     * Update the specified CaseLog in storage.
     *
     * @param  int              $id
     * @param UpdateCaseLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaseLogRequest $request)
    {
        $caseLog = $this->caseLogRepository->findWithoutFail($id);

        if (empty($caseLog)) {
            Flash::error('Case Log not found');

            return redirect(route('caseLogs.index'));
        }

        $caseLog = $this->caseLogRepository->update($request->all(), $id);

        Flash::success('Case Log updated successfully.');

        return redirect(route('caseLogs.index'));
    }

    /**
     * Remove the specified CaseLog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caseLog = $this->caseLogRepository->findWithoutFail($id);

        if (empty($caseLog)) {
            Flash::error('Case Log not found');

            return redirect(route('caseLogs.index'));
        }

        $this->caseLogRepository->delete($id);

        Flash::success('Case Log deleted successfully.');

        return redirect(route('caseLogs.index'));
    }
}
