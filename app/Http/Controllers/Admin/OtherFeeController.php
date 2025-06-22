<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOtherFeeRequest;
use App\Http\Requests\StoreOtherFeeRequest;
use App\Http\Requests\UpdateOtherFeeRequest;
use App\Models\Country;
use App\Models\OtherFee;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OtherFeeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('other_fee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otherFees = OtherFee::with(['country'])->get();

        return view('admin.otherFees.index', compact('otherFees'));
    }

    public function create()
    {
        abort_if(Gate::denies('other_fee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.otherFees.create', compact('countries'));
    }

    public function store(StoreOtherFeeRequest $request)
    {
        $otherFee = OtherFee::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $otherFee->id]);
        }

        return redirect()->route('admin.other-fees.index');
    }

    public function edit(OtherFee $otherFee)
    {
        abort_if(Gate::denies('other_fee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $otherFee->load('country');

        return view('admin.otherFees.edit', compact('countries', 'otherFee'));
    }

    public function update(UpdateOtherFeeRequest $request, OtherFee $otherFee)
    {
        $otherFee->update($request->all());

        return redirect()->route('admin.other-fees.index');
    }

    public function show(OtherFee $otherFee)
    {
        abort_if(Gate::denies('other_fee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otherFee->load('country');

        return view('admin.otherFees.show', compact('otherFee'));
    }

    public function destroy(OtherFee $otherFee)
    {
        abort_if(Gate::denies('other_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otherFee->delete();

        return back();
    }

    public function massDestroy(MassDestroyOtherFeeRequest $request)
    {
        $otherFees = OtherFee::find(request('ids'));

        foreach ($otherFees as $otherFee) {
            $otherFee->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('other_fee_create') && Gate::denies('other_fee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OtherFee();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
