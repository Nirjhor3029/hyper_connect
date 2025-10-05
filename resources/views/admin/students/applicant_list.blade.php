@extends('layouts.admin')
@section('styles')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 20px;
        }

        .card {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .status-pill {
            font-size: 0.85rem;
            padding: 0.3em 0.6em;
            border-radius: 50rem;
            font-weight: 500;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4 text-primary"><i class="bi bi-list-columns-reverse me-2"></i> All Student Applications</h1>

        {{-- Dashboard Cards: Numbers --}}
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Applicants</h5>
                        <h1 class="card-text">{{$totalApplicants}}</h1>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Applied</h5>
                        <h1 class="card-text">{{$totalApplied}}</h1>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Approved Offers</h5>
                        <h1 class="card-text">68</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Rejected/Closed</h5>
                        <h1 class="card-text">22</h1>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="card">
            <div class="card-header bg-white pt-3 pb-3">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="searchInput"
                            placeholder="Search by Name, Email, or App ID...">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" id="statusFilter">
                            <option value="">Filter by Status (All)</option>
                            <option value="Pending">Pending Review</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                            <option value="In Progress">In Progress</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" id="countryFilter">
                            <option value="">Filter by Country (All)</option>
                            <option>Bangladesh</option>
                            <option>India</option>
                            <option>Nepal</option>
                        </select>
                    </div>
                    {{-- <div class="col-md-2 text-end">
                        <button class="btn btn-primary"><i class="bi bi-file-earmark-arrow-down"></i> Export</button>
                    </div> --}}
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0" id="studentTable">
                        <thead class="table-light">
                            <tr>
                                <th scope="col"># ID</th>
                                <th scope="col">Applicant Name</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Applied Date</th> --}}
                                <th scope="col">Nationality</th>
                                {{-- <th scope="col">Overall Status</th> --}}
                                <th scope="col">New attachments (Pending Review)</th>
                                <th scope="col">Applied</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $item)
                                <tr data-student-id="{{ $item->id }}" data-status="In Progress"
                                    data-country="Bangladesh">
                                    @php
                                        $applicant_id = 1000 + $item->id;
                                    @endphp
                                    <td>APL-{{ $applicant_id }}</td>
                                    <td>{{ $item->name ?? $item->first_name }}</td>
                                    <td>{{ $item->email ?? '' }}</td>
                                    {{-- <td>2025-10-02</td> --}}
                                    <td>{{$item->nationality}}</td>
                                    <td>{{$item->uploads->where('file_status','uploaded')->count()}}</td>
                                    <td>
                                        {{$item->course_interesteds->count()}}
                                    </td>
                                    {{-- <td><span class="badge bg-info text-dark status-pill">In Progress</span></td> --}}
                                    <td>
                                        {{-- <a href="/admin/applications/{{ $applicant_id }}" --}}
                                        <a href="{{ route('admin.students.getApplicantDetails', $applicant_id) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i> View Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr data-student-id="1002" data-status="Approved" data-country="India">
                                <td>APL-1002</td>
                                <td>Ahana Sen</td>
                                <td>ahana.sen@email.com</td>
                                <td>2025-09-28</td>
                                <td>India</td>
                                <td><span class="badge bg-success status-pill">Approved</span></td>
                                <td>
                                    <a href="/admin/applications/1002" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View Details
                                    </a>
                                </td>
                            </tr>

                            <tr data-student-id="1003" data-status="Pending" data-country="Nepal">
                                <td>APL-1003</td>
                                <td>Bikram Tamang</td>
                                <td>bikram.t@email.com</td>
                                <td>2025-10-01</td>
                                <td>Nepal</td>
                                <td><span class="badge bg-warning text-dark status-pill">Pending</span></td>
                                <td>
                                    <a href="/admin/applications/1003" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View Details
                                    </a>
                                </td>
                            </tr>

                            <tr data-student-id="1004" data-status="Rejected" data-country="Bangladesh">
                                <td>APL-1004</td>
                                <td>Nadia Islam</td>
                                <td>nadia.i@email.com</td>
                                <td>2025-09-15</td>
                                <td>Bangladesh</td>
                                <td><span class="badge bg-danger status-pill">Rejected</span></td>
                                <td>
                                    <a href="/admin/applications/1004" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> View Details
                                    </a>
                                </td>
                            </tr> --}}

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <nav>
                    <ul class="pagination pagination-sm mb-0 justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function() {
            // Function to handle filtering and searching (client-side simulation)
            function filterTable() {
                const searchText = $('#searchInput').val().toLowerCase();
                const statusFilter = $('#statusFilter').val();
                const countryFilter = $('#countryFilter').val();

                $('#studentTable tbody tr').each(function() {
                    const row = $(this);
                    const name = row.find('td:eq(1)').text().toLowerCase();
                    const email = row.find('td:eq(2)').text().toLowerCase();
                    const appID = row.find('td:eq(0)').text().toLowerCase();
                    const status = row.data('status');
                    const country = row.data('country');

                    let matchesSearch = (name.includes(searchText) || email.includes(searchText) || appID
                        .includes(searchText));
                    let matchesStatus = (statusFilter === "" || status === statusFilter);
                    let matchesCountry = (countryFilter === "" || country === countryFilter);

                    if (matchesSearch && matchesStatus && matchesCountry) {
                        row.show();
                    } else {
                        row.hide();
                    }
                });
            }

            // Bind filterTable function to input/select changes
            $('#searchInput, #statusFilter, #countryFilter').on('keyup change', filterTable);

            // Make the entire row clickable to go to details page (UX improvement)
            $('#studentTable tbody tr').on('click', function(e) {
                // Prevent navigating if a link or button inside the row was clicked
                if ($(e.target).is('a, button, :input') || $(e.target).closest('a, button, :input')
                    .length) {
                    return;
                }

                const detailLink = $(this).find('a.btn-outline-primary').attr('href');
                if (detailLink) {
                    window.location.href = detailLink;
                }
            });
        });
    </script>
@endsection
