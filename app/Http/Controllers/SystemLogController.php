<?php

namespace App\Http\Controllers;

use App\DataTables\SystemLogDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSystemLogRequest;
use App\Http\Requests\UpdateSystemLogRequest;
use App\Repositories\SystemLogRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SystemLogController extends AppBaseController
{
    /** @var  SystemLogRepository */
    private $systemLogRepository;

    public function __construct(SystemLogRepository $systemLogRepo)
    {
        $this->systemLogRepository = $systemLogRepo;
    }

    /**
     * Display a listing of the SystemLog.
     *
     * @param SystemLogDataTable $systemLogDataTable
     * @return Response
     */
    public function index(SystemLogDataTable $systemLogDataTable)
    {
        return $systemLogDataTable->render('system_logs.index');
    }

    /**
     * Show the form for creating a new SystemLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('system_logs.create');
    }

    /**
     * Store a newly created SystemLog in storage.
     *
     * @param CreateSystemLogRequest $request
     *
     * @return Response
     */
    public function store(CreateSystemLogRequest $request)
    {
        $input = $request->all();

        $systemLog = $this->systemLogRepository->create($input);

        Flash::success('System Log saved successfully.');

        return redirect(route('systemLogs.index'));
    }

    /**
     * Display the specified SystemLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $systemLog = $this->systemLogRepository->find($id);

        if (empty($systemLog)) {
            Flash::error('System Log not found');

            return redirect(route('systemLogs.index'));
        }

        return view('system_logs.show')->with('systemLog', $systemLog);
    }

    /**
     * Show the form for editing the specified SystemLog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $systemLog = $this->systemLogRepository->find($id);

        if (empty($systemLog)) {
            Flash::error('System Log not found');

            return redirect(route('systemLogs.index'));
        }

        return view('system_logs.edit')->with('systemLog', $systemLog);
    }

    /**
     * Update the specified SystemLog in storage.
     *
     * @param  int              $id
     * @param UpdateSystemLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSystemLogRequest $request)
    {
        $systemLog = $this->systemLogRepository->find($id);

        if (empty($systemLog)) {
            Flash::error('System Log not found');

            return redirect(route('systemLogs.index'));
        }

        $systemLog = $this->systemLogRepository->update($request->all(), $id);

        Flash::success('System Log updated successfully.');

        return redirect(route('systemLogs.index'));
    }

    /**
     * Remove the specified SystemLog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $systemLog = $this->systemLogRepository->find($id);

        if (empty($systemLog)) {
            Flash::error('System Log not found');

            return redirect(route('systemLogs.index'));
        }

        $this->systemLogRepository->delete($id);

        Flash::success('System Log deleted successfully.');

        return redirect(route('systemLogs.index'));
    }
}
