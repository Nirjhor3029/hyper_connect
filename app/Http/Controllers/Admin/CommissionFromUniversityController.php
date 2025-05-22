<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommissionFromUniversityRequest;
use App\Http\Requests\StoreCommissionFromUniversityRequest;
use App\Http\Requests\UpdateCommissionFromUniversityRequest;
use App\Models\CommissionFromUniversity;
use App\Models\Course;
use App\Models\University;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommissionFromUniversityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('commission_from_university_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionFromUniversities = CommissionFromUniversity::with(['university', 'course'])->get();

        return view('admin.commissionFromUniversities.index', compact('commissionFromUniversities'));
    }

    public function create()
    {
        abort_if(Gate::denies('commission_from_university_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.commissionFromUniversities.create', compact('courses', 'universities'));
    }

    public function store(StoreCommissionFromUniversityRequest $request)
    {
        $commissionFromUniversity = CommissionFromUniversity::create($request->all());

        return redirect()->route('admin.commission-from-universities.index');
    }

    public function edit(CommissionFromUniversity $commissionFromUniversity)
    {
        abort_if(Gate::denies('commission_from_university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = Course::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $commissionFromUniversity->load('university', 'course');

        return view('admin.commissionFromUniversities.edit', compact('commissionFromUniversity', 'courses', 'universities'));
    }

    public function update(UpdateCommissionFromUniversityRequest $request, CommissionFromUniversity $commissionFromUniversity)
    {
        $commissionFromUniversity->update($request->all());

        return redirect()->route('admin.commission-from-universities.index');
    }

    public function show(CommissionFromUniversity $commissionFromUniversity)
    {
        abort_if(Gate::denies('commission_from_university_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionFromUniversity->load('university', 'course');

        return view('admin.commissionFromUniversities.show', compact('commissionFromUniversity'));
    }

    public function destroy(CommissionFromUniversity $commissionFromUniversity)
    {
        abort_if(Gate::denies('commission_from_university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionFromUniversity->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommissionFromUniversityRequest $request)
    {
        $commissionFromUniversities = CommissionFromUniversity::find(request('ids'));

        foreach ($commissionFromUniversities as $commissionFromUniversity) {
            $commissionFromUniversity->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
