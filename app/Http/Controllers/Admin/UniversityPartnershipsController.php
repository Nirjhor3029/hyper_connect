<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUniversityPartnershipRequest;
use App\Http\Requests\StoreUniversityPartnershipRequest;
use App\Http\Requests\UpdateUniversityPartnershipRequest;
use App\Models\University;
use App\Models\UniversityPartnership;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UniversityPartnershipsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('university_partnership_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityPartnerships = UniversityPartnership::with(['university'])->get();

        return view('admin.universityPartnerships.index', compact('universityPartnerships'));
    }

    public function create()
    {
        abort_if(Gate::denies('university_partnership_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.universityPartnerships.create', compact('universities'));
    }

    public function store(StoreUniversityPartnershipRequest $request)
    {
        $universityPartnership = UniversityPartnership::create($request->all());

        return redirect()->route('admin.university-partnerships.index');
    }

    public function edit(UniversityPartnership $universityPartnership)
    {
        abort_if(Gate::denies('university_partnership_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $universityPartnership->load('university');

        return view('admin.universityPartnerships.edit', compact('universities', 'universityPartnership'));
    }

    public function update(UpdateUniversityPartnershipRequest $request, UniversityPartnership $universityPartnership)
    {
        $universityPartnership->update($request->all());

        return redirect()->route('admin.university-partnerships.index');
    }

    public function show(UniversityPartnership $universityPartnership)
    {
        abort_if(Gate::denies('university_partnership_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityPartnership->load('university');

        return view('admin.universityPartnerships.show', compact('universityPartnership'));
    }

    public function destroy(UniversityPartnership $universityPartnership)
    {
        abort_if(Gate::denies('university_partnership_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universityPartnership->delete();

        return back();
    }

    public function massDestroy(MassDestroyUniversityPartnershipRequest $request)
    {
        $universityPartnerships = UniversityPartnership::find(request('ids'));

        foreach ($universityPartnerships as $universityPartnership) {
            $universityPartnership->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
