<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStatusLogRequest;
use App\Http\Requests\StoreStatusLogRequest;
use App\Http\Requests\UpdateStatusLogRequest;
use App\Models\StatusLog;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StatusLogsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('status_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusLogs = StatusLog::with(['status_from', 'status_to', 'changed_by'])->get();

        return view('admin.statusLogs.index', compact('statusLogs'));
    }

    public function create()
    {
        abort_if(Gate::denies('status_log_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $status_froms = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $status_tos = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $changed_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.statusLogs.create', compact('changed_bies', 'status_froms', 'status_tos'));
    }

    public function store(StoreStatusLogRequest $request)
    {
        $statusLog = StatusLog::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $statusLog->id]);
        }

        return redirect()->route('admin.status-logs.index');
    }

    public function edit(StatusLog $statusLog)
    {
        abort_if(Gate::denies('status_log_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $status_froms = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $status_tos = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $changed_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statusLog->load('status_from', 'status_to', 'changed_by');

        return view('admin.statusLogs.edit', compact('changed_bies', 'statusLog', 'status_froms', 'status_tos'));
    }

    public function update(UpdateStatusLogRequest $request, StatusLog $statusLog)
    {
        $statusLog->update($request->all());

        return redirect()->route('admin.status-logs.index');
    }

    public function show(StatusLog $statusLog)
    {
        abort_if(Gate::denies('status_log_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusLog->load('status_from', 'status_to', 'changed_by');

        return view('admin.statusLogs.show', compact('statusLog'));
    }

    public function destroy(StatusLog $statusLog)
    {
        abort_if(Gate::denies('status_log_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statusLog->delete();

        return back();
    }

    public function massDestroy(MassDestroyStatusLogRequest $request)
    {
        $statusLogs = StatusLog::find(request('ids'));

        foreach ($statusLogs as $statusLog) {
            $statusLog->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('status_log_create') && Gate::denies('status_log_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new StatusLog();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
