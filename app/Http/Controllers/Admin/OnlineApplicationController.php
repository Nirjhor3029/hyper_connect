<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\OnlineApplication;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class OnlineApplicationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applications = OnlineApplication::all();

        return view('admin.online_applications.index', compact('applications'));
    }
    public function show($id)
    {
        $application = OnlineApplication::findOrFail($id);
        return view('admin.online_applications.show', compact('application'));
    }
}
