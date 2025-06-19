@extends('layouts.admin')
@section('content')

    <style>
        .card-body ul {
            list-style: disc;
            padding-left: 1rem;
        }
    </style>

    <div class="content">
    @php
        use Carbon\Carbon;

        $currentMonth = request('month') ?? Carbon::now()->format('Y-m');
        $months = [];

        for ($i = 0; $i < 12; $i++) {
            $date = Carbon::now()->subMonths($i);
            $value = $date->format('Y-m');
            $label = $date->format('F Y');
            $months[$value] = $label;
        }
    @endphp

    <div class="row mb-3 justify-content-between">
        <div class="col-md-6">
            <h4 class="mt-2">Dashboard</h4>
        </div>
        <div class="col-md-4 text-right">
            <form method="GET" action="{{ route('admin.home') }}">
                <div class="form-inline float-right">
                    <label for="month" class="mr-2 font-weight-bold">Filter Month:</label>
                    <select name="month" id="month" class="form-control" onchange="this.form.submit()">
                        <option value="">-- All --</option>
                        @foreach($months as $value => $label)
                            <option value="{{ $value }}" {{ $currentMonth == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <!-- Total Students -->
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Total Students</h5>
                    <h3>{{ $totalStudents }}</h3>
                </div>
            </div>
        </div>

        <!-- Students by Status -->
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-warning shadow">
                <div class="card-body">
                    <h5 class="card-title">Students by Status</h5>
                    <ul class="pl-3 mb-0">
                        @forelse($studentsByStatus as $status => $count)
                            <li>{{ ucwords(str_replace('_', ' ', $status)) }}: {{ $count }}</li>
                        @empty
                            <li>No data</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <!-- Commission Summary -->
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title">Commission Summary</h5>
                    <p>Total: {{ number_format($totalCommission, 2) }} ৳</p>
                    <p>Claimed: {{ number_format($totalClaimed, 2) }} ৳</p>
                    <p>Pending: {{ number_format($totalPending, 2) }} ৳</p>
                </div>
            </div>
        </div>


    </div>

</div>
@endsection
@section('scripts')
@parent

@endsection
