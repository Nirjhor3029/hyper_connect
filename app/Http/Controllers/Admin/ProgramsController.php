<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProgramRequest;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Program;
use App\Models\Tag;
use App\Models\University;
// use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ProgramsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('program_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $programs = Program::with(['university', 'tags'])->get();

        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        abort_if(Gate::denies('program_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        return view('admin.programs.create', compact('tags', 'universities'));
    }

    public function store(StoreProgramRequest $request)
    {
        $program = Program::create($request->all());
        $program->tags()->sync($request->input('tags', []));
        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $program->id]);
        }

        return redirect()->route('admin.programs.index');
    }

    public function edit(Program $program)
    {
        abort_if(Gate::denies('program_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        $program->load('university', 'tags');

        return view('admin.programs.edit', compact('program', 'tags', 'universities'));
    }

    public function update(UpdateProgramRequest $request, Program $program)
    {
        $program->update($request->all());
        $program->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.programs.index');
    }

    public function show(Program $program)
    {
        abort_if(Gate::denies('program_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $program->load('university', 'tags', 'programApplications', 'programsStudents');

        return view('admin.programs.show', compact('program'));
    }

    public function destroy(Program $program)
    {
        abort_if(Gate::denies('program_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $program->delete();

        return back();
    }

    public function massDestroy(MassDestroyProgramRequest $request)
    {
        $programs = Program::find(request('ids'));

        foreach ($programs as $program) {
            $program->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('program_create') && Gate::denies('program_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Program();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
