<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agent;
use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index()
    {
        $user = auth()->user();

        $month = request('month');


        $query = Student::query();


        $agent = Agent::where('user_id', $user->id)->first();

        if ($agent) {

            $query->where('lead_agent_id', $agent->id);
        }

        if ($month) {
            $query->whereMonth('created_at', Carbon::parse($month)->month)
                ->whereYear('created_at', Carbon::parse($month)->year);
        }

        $totalStudents = (clone $query)->count();

        $studentsByStatus = (clone $query)
            ->select('admission_status', DB::raw('count(*) as total'))
            ->groupBy('admission_status')
            ->pluck('total', 'admission_status')
            ->toArray();

        $totalCommission = (clone $query)->sum('commission_amount');

        $totalClaimed = (clone $query)
            ->where('is_commission_claimed_from_univeristy', 1)
            ->sum('commission_amount');

        $totalPending = $totalCommission - $totalClaimed;

        return view('home', compact(
            'totalStudents',
            'studentsByStatus',
            'totalCommission',
            'totalClaimed',
            'totalPending',
            'month'
        ));
    }

}
