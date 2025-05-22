<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOfferLetterRequest;
use App\Http\Requests\StoreOfferLetterRequest;
use App\Http\Requests\UpdateOfferLetterRequest;
use App\Models\Application;
use App\Models\OfferLetter;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OfferLettersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('offer_letter_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offerLetters = OfferLetter::with(['application', 'issued_by'])->get();

        return view('admin.offerLetters.index', compact('offerLetters'));
    }

    public function create()
    {
        abort_if(Gate::denies('offer_letter_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applications = Application::pluck('intake_term', 'id')->prepend(trans('global.pleaseSelect'), '');

        $issued_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.offerLetters.create', compact('applications', 'issued_bies'));
    }

    public function store(StoreOfferLetterRequest $request)
    {
        $offerLetter = OfferLetter::create($request->all());

        return redirect()->route('admin.offer-letters.index');
    }

    public function edit(OfferLetter $offerLetter)
    {
        abort_if(Gate::denies('offer_letter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applications = Application::pluck('intake_term', 'id')->prepend(trans('global.pleaseSelect'), '');

        $issued_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $offerLetter->load('application', 'issued_by');

        return view('admin.offerLetters.edit', compact('applications', 'issued_bies', 'offerLetter'));
    }

    public function update(UpdateOfferLetterRequest $request, OfferLetter $offerLetter)
    {
        $offerLetter->update($request->all());

        return redirect()->route('admin.offer-letters.index');
    }

    public function show(OfferLetter $offerLetter)
    {
        abort_if(Gate::denies('offer_letter_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offerLetter->load('application', 'issued_by');

        return view('admin.offerLetters.show', compact('offerLetter'));
    }

    public function destroy(OfferLetter $offerLetter)
    {
        abort_if(Gate::denies('offer_letter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offerLetter->delete();

        return back();
    }

    public function massDestroy(MassDestroyOfferLetterRequest $request)
    {
        $offerLetters = OfferLetter::find(request('ids'));

        foreach ($offerLetters as $offerLetter) {
            $offerLetter->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
