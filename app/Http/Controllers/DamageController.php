<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDamageRequest;
use App\Http\Requests\UpdateDamageRequest;
use App\Repositories\DamageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DamageController extends AppBaseController
{
    /** @var  DamageRepository */
    private $damageRepository;

    public function __construct(DamageRepository $damageRepo)
    {
        $this->damageRepository = $damageRepo;
    }

    /**
     * Display a listing of the Damage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->damageRepository->pushCriteria(new RequestCriteria($request));
        $damages = $this->damageRepository->all();

        return view('damages.index')
            ->with('damages', $damages);
    }

    /**
     * Show the form for creating a new Damage.
     *
     * @return Response
     */
    public function create()
    {
        return view('damages.create');
    }

    /**
     * Store a newly created Damage in storage.
     *
     * @param CreateDamageRequest $request
     *
     * @return Response
     */
    public function store(CreateDamageRequest $request)
    {
        $input = $request->all();

        $damage = $this->damageRepository->create($input);

        Flash::success('Damage saved successfully.');

        return redirect(route('damages.index'));
    }

    /**
     * Display the specified Damage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $damage = $this->damageRepository->findWithoutFail($id);

        if (empty($damage)) {
            Flash::error('Damage not found');

            return redirect(route('damages.index'));
        }

        return view('damages.show')->with('damage', $damage);
    }

    /**
     * Show the form for editing the specified Damage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $damage = $this->damageRepository->findWithoutFail($id);

        if (empty($damage)) {
            Flash::error('Damage not found');

            return redirect(route('damages.index'));
        }

        return view('damages.edit')->with('damage', $damage);
    }

    /**
     * Update the specified Damage in storage.
     *
     * @param  int              $id
     * @param UpdateDamageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDamageRequest $request)
    {
        $damage = $this->damageRepository->findWithoutFail($id);

        if (empty($damage)) {
            Flash::error('Damage not found');

            return redirect(route('damages.index'));
        }

        $damage = $this->damageRepository->update($request->all(), $id);

        Flash::success('Damage updated successfully.');

        return redirect(route('damages.index'));
    }

    /**
     * Remove the specified Damage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $damage = $this->damageRepository->findWithoutFail($id);

        if (empty($damage)) {
            Flash::error('Damage not found');

            return redirect(route('damages.index'));
        }

        $this->damageRepository->delete($id);

        Flash::success('Damage deleted successfully.');

        return redirect(route('damages.index'));
    }
}
