<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTypeOperationAPIRequest;
use App\Http\Requests\API\UpdateTypeOperationAPIRequest;
use App\Models\TypeOperation;
use App\Repositories\TypeOperationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TypeOperationController
 * @package App\Http\Controllers\API
 */

class TypeOperationAPIController extends AppBaseController
{
    /** @var  TypeOperationRepository */
    private $typeOperationRepository;

    public function __construct(TypeOperationRepository $typeOperationRepo)
    {
        $this->typeOperationRepository = $typeOperationRepo;
    }

    /**
     * Display a listing of the TypeOperation.
     * GET|HEAD /typeOperations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $typeOperations = $this->typeOperationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($typeOperations->toArray(), 'Type Operations retrieved successfully');
    }

    /**
     * Store a newly created TypeOperation in storage.
     * POST /typeOperations
     *
     * @param CreateTypeOperationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTypeOperationAPIRequest $request)
    {
        $input = $request->all();

        $typeOperation = $this->typeOperationRepository->create($input);

        return $this->sendResponse($typeOperation->toArray(), 'Type Operation saved successfully');
    }

    /**
     * Display the specified TypeOperation.
     * GET|HEAD /typeOperations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TypeOperation $typeOperation */
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            return $this->sendError('Type Operation not found');
        }

        return $this->sendResponse($typeOperation->toArray(), 'Type Operation retrieved successfully');
    }

    /**
     * Update the specified TypeOperation in storage.
     * PUT/PATCH /typeOperations/{id}
     *
     * @param int $id
     * @param UpdateTypeOperationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTypeOperationAPIRequest $request)
    {
        $input = $request->all();

        /** @var TypeOperation $typeOperation */
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            return $this->sendError('Type Operation not found');
        }

        $typeOperation = $this->typeOperationRepository->update($input, $id);

        return $this->sendResponse($typeOperation->toArray(), 'TypeOperation updated successfully');
    }

    /**
     * Remove the specified TypeOperation from storage.
     * DELETE /typeOperations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TypeOperation $typeOperation */
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            return $this->sendError('Type Operation not found');
        }

        $typeOperation->delete();

        return $this->sendSuccess('Type Operation deleted successfully');
    }
}
