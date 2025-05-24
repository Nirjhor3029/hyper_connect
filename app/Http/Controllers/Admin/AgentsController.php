<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAgentRequest;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\Agent;
use App\Models\Country;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AgentsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('agent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agents = Agent::with(['country', 'parent_agent', 'user'])->get();

        return view('admin.agents.index', compact('agents'));
    }

    public function create()
    {
        abort_if(Gate::denies('agent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $parent_agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.agents.create', compact('countries', 'parent_agents', 'users'));
    }

    public function store(StoreAgentRequest $request)
    {

        $user = User::create([
            'name'       => $request->input('name'),
            'email'      => $request->input('email'),
            'phone'      => $request->input('phone'),
            'country_id' => $request->input('country_id'),
            'password'   => Hash::make('123456'),
        ]);

        $user->roles()->sync([3]);

        $agentData = $request->all();
        $agentData['user_id'] = $user->id;
        $agent = Agent::create($agentData);

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $agent->id]);
        }

        return redirect()->route('admin.agents.index');
    }

    public function edit(Agent $agent)
    {
        abort_if(Gate::denies('agent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $parent_agents = Agent::pluck('agency_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $agent->load('country', 'parent_agent', 'user');

        return view('admin.agents.edit', compact('agent', 'countries', 'parent_agents'));
    }

    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        $agent->update($request->all());

        return redirect()->route('admin.agents.index');
    }

    public function show(Agent $agent)
    {
        abort_if(Gate::denies('agent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agent->load('country', 'parent_agent', 'user', 'parentAgentAgents', 'agentApplications', 'subAgentApplications', 'agentAgentCommissions', 'leadAgentStudents', 'handellingAgentStudents', 'agentCommissionSettings');

        return view('admin.agents.show', compact('agent'));
    }

    public function destroy(Agent $agent)
    {
        abort_if(Gate::denies('agent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agent->delete();

        return back();
    }

    public function massDestroy(MassDestroyAgentRequest $request)
    {
        $agents = Agent::find(request('ids'));

        foreach ($agents as $agent) {
            $agent->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('agent_create') && Gate::denies('agent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Agent();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
