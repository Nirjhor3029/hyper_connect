@extends('layouts.admin')
@section('styles')
    <style>
        .nav-tabs .nav-link.active {
            background-color: #156593;
            color: #fff !important;
        }

        .counter-badge {
            background: #e9ecef;
            color: #333;
            border-radius: 12px;
            padding: 2px 8px;
            font-size: 12px;
            margin-left: 6px;
        }

        table th,
        table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4 text-primary"><i class="bi bi-list-columns-reverse me-2"></i> All Applications</h1>


        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="mb-3 fw-bold">Students List</h4>

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3" id="filterTabs">
                    <li class="nav-item">
                        <a class="nav-link {{ (request('filter') == 'all' || request('filter') == null) ? 'active' : '' }}" data-filter="all"
                            href="javascript:void(0)">All
                            <span class="counter-badge" id="count-all">{{$countData['all']}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request('filter') == 'new-registered' ? 'active' : '' }} "
                            data-filter="new-registered" href="javascript:void(0)">
                            New Registered
                            <span class="counter-badge" id="count-new-registered">{{$countData['new-registered']}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request('filter') == 'new-applied' ? 'active' : '' }}"
                            data-filter="new-applied" href="javascript:void(0)">
                            New Applied
                            <span class="counter-badge" id="count-new-applied">{{$countData['new-applied']}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request('filter') == 'payment-done' ? 'active' : '' }}"
                            data-filter="payment-done" href="javascript:void(0)">
                            EMGS Payment Done
                            <span class="counter-badge" id="count-payment-done">{{$countData['payment-done']}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request('filter') == 'got-offer' ? 'active' : '' }}" data-filter="got-offer"
                            href="javascript:void(0)">
                            Got Offer Letter
                            <span class="counter-badge" id="count-got-offer">{{$countData['got-offer']}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request('filter') == 'offer-accepted' ? 'active' : '' }}"
                            data-filter="offer-accepted" href="javascript:void(0)">
                            Offer Letter Accpted
                            <span class="counter-badge" id="count-offer-accepted">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request('filter') == 'profile-completed' ? 'active' : '' }}"
                            data-filter="profile-completed" href="javascript:void(0)">
                            Profile Completed
                            <span class="counter-badge" id="count-profile-completed">0</span>
                        </a>
                    </li>
                </ul>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle" id="membersTable">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nationality</th>
                                <th scope="col">New attachments (Pending Review)</th>
                                <th scope="col">Applied</th>
                                <th scope="col">Joined Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studetns as $ky => $item)
                                @php
                                    $studentID = $item->id + 1000;
                                @endphp
                                <tr data-status="active">

                                    <td>APL-{{ $studentID }}</td>
                                    <td>{{ $item->name ?? $item->first_name }}</td>
                                    <td>{{ $item->email ?? '' }}</td>
                                    {{-- <td>2025-10-02</td> --}}
                                    <td>{{$item->nationality}}</td>
                                    <td>{{$item->uploads->where('file_status','uploaded')->count()}}</td>
                                    <td>
                                        {{$item->course_interesteds->count()}}
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.students.getApplicantDetails', $studentID) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i> View Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- <tr data-status="inactive">
                                <td>2</td>
                                <td>Karim Mia</td>
                                <td><span class="badge bg-secondary">Inactive</span></td>
                                <td>2025-09-12</td>
                            </tr>
                            <tr data-status="pending">
                                <td>3</td>
                                <td>Selina Akter</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>2025-09-30</td>
                            </tr>
                            <tr data-status="active">
                                <td>4</td>
                                <td>Hasan Ali</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2025-08-20</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function() {
            // ===== Function to update counters =====
            function updateCounters() {
                const total = $("#membersTable tbody tr").length;
                const active = $("#membersTable tbody tr[data-status='active']").length;
                const inactive = $("#membersTable tbody tr[data-status='inactive']").length;
                const pending = $("#membersTable tbody tr[data-status='pending']").length;

                $("#count-all").text(total);
                $("#count-active").text(active);
                $("#count-inactive").text(inactive);
                $("#count-pending").text(pending);
            }

            // ===== Initial counter setup =====
            // updateCounters();

            // ===== Filter function =====
            $("#filterTabs .nav-link").on("click", function(e) {
                e.preventDefault();

                $("#filterTabs .nav-link").removeClass("active");
                $(this).addClass("active");

                const filter = $(this).data("filter");

                const currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('filter', filter);
                window.location.href = currentUrl.href;

                // if (filter === "all") {
                //     $("#membersTable tbody tr").show();
                // } else {
                //     $("#membersTable tbody tr").hide();
                //     $("#membersTable tbody tr[data-status='" + filter + "']").show();
                // }
            });
        });
    </script>
@endsection
