<?php

namespace App\Http\Controllers;

use App\DataTables\ReaderDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateReaderRequest;
use App\Http\Requests\UpdateReaderRequest;
use App\Repositories\ReaderRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ReaderController extends AppBaseController
{
    /** @var  ReaderRepository */
    private $readerRepository;

    public function __construct(ReaderRepository $readerRepo)
    {
        $this->readerRepository = $readerRepo;
    }

    /**
     * Display a listing of the Reader.
     *
     * @param ReaderDataTable $readerDataTable
     * @return Response
     */
    public function index(ReaderDataTable $readerDataTable)
    {
        return $readerDataTable->render('readers.index');
    }

    /**
     * Show the form for creating a new Reader.
     *
     * @return Response
     */
    public function create()
    {
        return view('readers.create');
    }

    /**
     * Store a newly created Reader in storage.
     *
     * @param CreateReaderRequest $request
     *
     * @return Response
     */
    public function store(CreateReaderRequest $request)
    {
        $input = $request->all();

        $reader = $this->readerRepository->create($input);

        Flash::success('Reader saved successfully.');

        return redirect(route('readers.index'));
    }

    /**
     * Display the specified Reader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reader = $this->readerRepository->find($id);

        if (empty($reader)) {
            Flash::error('Reader not found');

            return redirect(route('readers.index'));
        }

        return view('readers.show')->with('reader', $reader);
    }

    /**
     * Show the form for editing the specified Reader.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reader = $this->readerRepository->find($id);

        if (empty($reader)) {
            Flash::error('Reader not found');

            return redirect(route('readers.index'));
        }

        return view('readers.edit')->with('reader', $reader);
    }

    /**
     * Update the specified Reader in storage.
     *
     * @param  int              $id
     * @param UpdateReaderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReaderRequest $request)
    {
        $reader = $this->readerRepository->find($id);

        if (empty($reader)) {
            Flash::error('Reader not found');

            return redirect(route('readers.index'));
        }

        $reader = $this->readerRepository->update($request->all(), $id);

        Flash::success('Reader updated successfully.');

        return redirect(route('readers.index'));
    }

    /**
     * Remove the specified Reader from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reader = $this->readerRepository->find($id);

        if (empty($reader)) {
            Flash::error('Reader not found');

            return redirect(route('readers.index'));
        }

        $this->readerRepository->delete($id);

        Flash::success('Reader deleted successfully.');

        return redirect(route('readers.index'));
    }
}
