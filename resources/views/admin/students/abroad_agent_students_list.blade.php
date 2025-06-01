@extends('layouts.admin')

@section('title', 'New Students | Student Search & Prospect Management')
@section('styles')
    @parent
    <style>
        /* * {
                                        margin: 0;
                                        padding: 0;
                                        box-sizing: border-box;
                                    }

                                    body {
                                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                                        min-height: 100vh;
                                        padding: 20px;
                                    } */

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 300;
        }

        .header p {
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .main-content {
            padding: 30px;
        }

        .search-section {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            border: 1px solid #e9ecef;
        }

        .search-title {
            font-size: 1.4rem;
            color: #2c3e50;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-icon {
            width: 24px;
            height: 24px;
            background: #007bff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
        }

        .search-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            margin-bottom: 8px;
            font-weight: 500;
            color: #495057;
            font-size: 0.95rem;
        }

        .form-input {
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .btn-success {
            background: #28a745;
            color: white;
        }

        .btn-success:hover {
            background: #1e7e34;
        }

        .btn-info {
            background: #17a2b8;
            color: white;
        }

        .btn-info:hover {
            background: #138496;
        }

        .search-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .results-section {
            margin-bottom: 30px;
        }

        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .results-count {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .student-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .student-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .student-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .student-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-new {
            background: #ffeaa7;
            color: #d63031;
        }

        .status-prospect {
            background: #81ecec;
            color: #00b894;
        }

        .status-contacted {
            background: #a29bfe;
            color: #6c5ce7;
        }

        .student-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 15px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
        }

        .info-label {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 3px;
        }

        .info-value {
            font-weight: 500;
            color: #2c3e50;
        }

        .student-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 0.9rem;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-title {
            font-size: 1.5rem;
            color: #2c3e50;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #6c757d;
        }

        .prospect-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .prospect-form .form-group.full-width {
            grid-column: 1 / -1;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
        }

        .modal-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #6c757d;
        }

        .no-results h3 {
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .search-form {
                grid-template-columns: 1fr;
            }

            .search-actions {
                justify-content: center;
            }

            .student-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .student-actions {
                justify-content: center;
            }

            .modal-content {
                padding: 20px;
                margin: 20px;
            }

            .prospect-form {
                grid-template-columns: 1fr;
            }
        }
    </style>

@endsection

@section('content')
    <div class="container">
        <div class="header">
            <h1>Student Search & Documentation, Offer Processing Management</h1>
            <p>Search students and Apply for Admission</p>
        </div>

        <div class="main-content">
            <!-- Search Section -->
            <div class="search-section">
                <h2 class="search-title">
                    <span class="search-icon">🔍</span>
                    Search Students
                </h2>

                <form class="search-form" id="searchForm">
                    <div class="form-group">
                        <label class="form-label">From Date</label>
                        <input type="date" name="form" class="form-input" id="fromDate">
                    </div>

                    <div class="form-group">
                        <label class="form-label">To Date</label>
                        <input type="date" name="to" class="form-input" id="toDate">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Student Name</label>
                        <input type="text" name="keyword" class="form-input" id="studentName"
                            placeholder="Enter student name">
                    </div>

                    <div class="form-group">

                        <select name="agent_id" class="form-control select2" name="agentName" id="agentName">
                            <option value=""> All Agents </option>
                            @foreach ($agents as $id => $name)
                                <option value="{{ $id }}" {{ request('agent_id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="form-group">
                        <select name="nationality_id" class="form-input select2">
                            <option value=""> Nationality</option>
                            @foreach ($nationalities as $id => $name)
                                <option value="{{ $id }}"
                                    {{ request('nationality_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="subject_id" class="form-control select2">
                            <option value=""> Subject</option>
                            @foreach ($subjects as $id => $name)
                                <option value="{{ $id }}" {{ request('subject_id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <select name="university_id" class="form-control select2">
                            <option value=""> University</option>
                            @foreach ($universities as $id => $name)
                                <option value="{{ $id }}"
                                    {{ request('university_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <select name="program_id" class="form-control select2">
                            <option value=""> Program</option>
                            @foreach ($programs as $id => $name)
                                <option value="{{ $id }}" {{ request('program_id') == $id ? 'selected' : '' }}>
                                    {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">

                        <select class="form-input select2" id="status">
                            <option value="">All Status</option>
                            <option value="new">New</option>
                            <option value="contacted">Contacted</option>
                            <option value="prospect">Prospect</option>
                        </select>
                    </div>
                </form>

                <div class="search-actions">
                    <button class="btn btn-primary" onclick="searchStudents()">Search Students</button>
                    <button class="btn btn-info" onclick="resetSearch()">Reset</button>
                </div>
            </div>

            <!-- Results Section -->
            <div class="results-section">
                <div class="results-header">
                    <div class="results-count" id="resultsCount">Found 0 students</div>
                </div>

                <div id="studentsList">
                    <!-- Student cards will be populated here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Prospect Modal -->
    <div class="modal" id="prospectModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Convert to Prospect</h3>
                <button class="close-btn" onclick="closeModal()">&times;</button>
            </div>

            <form class="prospect-form" id="prospectForm">
                <input type="hidden" id="selectedStudentId" name="selectedStudentId">

                {{--      <div class="form-group">
                    <label class="form-label"> Country</label>
                    <select class="form-input select2" id="homeCountry" required>


                        <option value="">Select Country</option>
                        @foreach ($countries as $id => $name)
                            <option value="{{ $id }}" {{ request('program_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach

                    </select>
                </div> --}}

                <div class="form-group">
                    <label class="form-label">Maximum Tuition Fee (USD)</label>
                    <input type="text" class="form-input" id="maxTuitionFee" placeholder="e.g., 20000" required>
                    <small class="form-text text-muted">Enter the maximum tuition fee the student can afford.</small>
                    {{-- <select class="form-input select2" id="maxTuitionFee" required>
                        <option value="">Select Range</option>
                        <option value="10000">Up to $10,000</option>
                        <option value="20000">Up to $20,000</option>
                        <option value="30000">Up to $30,000</option>
                        <option value="40000">Up to $40,000</option>
                        <option value="50000">Up to $50,000</option>
                        <option value="60000">Up to $60,000</option>
                        <option value="70000">Up to $70,000</option>
                        <option value="80000">Up to $80,000</option>
                        <option value="100000">Up to $100,000</option>
                        <option value="unlimited">No Limit</option>
                    </select> --}}
                </div>


                <div class="form-group full-width">
                    <label class="form-label">Interested Countries (Select multiple)</label>

                    <select class=" form-control select2" name="interestedCountries[]" id="interestedCountries" multiple>
                        @foreach ($countries as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    {{-- <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">

                        @foreach ($countries as $id => $name)
                            <div class="checkbox-group">
                                <input type="checkbox" id="country_us" name="interestedCountries"
                                    value="{{ $id }}">
                                <label for="country_us">{{ $name }}</label>
                            </div>
                        @endforeach
                    </div> --}}
                </div>

                {{-- <div class="form-group full-width">
                    <label class="form-label">Interested Countries (Select multiple)</label>
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">

                        @foreach ($countries as $id => $name)
                            <div class="checkbox-group">
                                <input type="checkbox" id="country_us" name="interestedCountries"
                                    value="{{ $id }}">
                                <label for="country_us">{{ $name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="form-label">Completed Subject/Degree</label>
                    <input type="text" class="form-input" id="completedSubject"
                        placeholder="e.g., Bachelor's in Computer Science" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Completion Year</label>
                    <select class="form-input" id="completionYear" required>
                        <option value="">Select Year</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="earlier">Earlier than 2016</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">GPA/Percentage</label>
                    <input type="text" class="form-input" id="gpa" placeholder="e.g., 3.5 GPA or 75%">
                </div>

                <div class="form-group">
                    <label class="form-label">Interested Subject for Study</label>
                    <select class="form-input" id="interestedSubject" required>
                        <option value="">Select Subject</option>
                        @foreach ($subjects as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Study Level</label>
                    <select class="form-input" id="studyLevel" required>
                        <option value="">Select Level</option>
                        <option value="bachelors">Bachelor's Degree</option>
                        <option value="masters">Master's Degree</option>
                        <option value="phd">PhD</option>
                        <option value="diploma">Diploma</option>
                        <option value="certificate">Certificate Program</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">IELTS Status</label>
                    <select class="form-input" id="ieltsStatus" required>
                        <option value="">Select Status</option>
                        <option value="done">IELTS Done</option>
                        <option value="not_done">IELTS Not Done</option>
                        <option value="planning">Planning to Take</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">IELTS Score (if done)</label>
                    <input type="text" class="form-input" id="ieltsScore" placeholder="e.g., 7.0">
                </div>

                <div class="form-group">
                    <label class="form-label">MOI (Medium of Instruction)</label>
                    <select class="form-input" id="moiStatus" required>
                        <option value="">Select Status</option>
                        <option value="done">MOI Done</option>
                        <option value="not_done">MOI Not Done</option>
                        <option value="not_required">Not Required</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Additional Notes</label>
                    <textarea class="form-input" id="additionalNotes" rows="3"
                        placeholder="Any additional information about the student..."></textarea>
                </div>
            </form>

            <div class="modal-actions">
                <button class="btn btn-primary" onclick="closeModal()">Cancel</button>
                <button class="btn btn-success" onclick="saveProspect()">Save as Prospect</button>
            </div>
        </div>
    </div>



@endsection
@section('scripts')
    @parent
    <script>
        // Sample student data
        let studentsData = @json($students);
        let admissionStages = @json($admission_stage);

        let filteredStudents = [...studentsData];

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            displayStudents(filteredStudents);
        });

        // Search functionality
        function searchStudents() {
            const fromDate = document.getElementById('fromDate').value;
            const toDate = document.getElementById('toDate').value;
            const agentName = document.getElementById('agentName').value;
            const studentName = document.getElementById('studentName').value.toLowerCase();
            const status = document.getElementById('status').value;

            filteredStudents = studentsData.filter(student => {
                let matches = true;

                if (fromDate && student.entryDate < fromDate) matches = false;
                if (toDate && student.entryDate > toDate) matches = false;
                if (agentName && student.agentName !== agentName) matches = false;
                if (studentName && !student.name.toLowerCase().includes(studentName)) matches = false;
                if (status && student.status !== status) matches = false;

                return matches;
            });

            displayStudents(filteredStudents);
        }

        // Reset search
        function resetSearch() {
            document.getElementById('searchForm').reset();
            filteredStudents = [...studentsData];
            displayStudents(filteredStudents);
        }

        // Display students
        function displayStudents(students) {
            const studentsList = document.getElementById('studentsList');
            const resultsCount = document.getElementById('resultsCount');

            resultsCount.textContent = `Found ${students.length} students`;

            if (students.length === 0) {
                studentsList.innerHTML = `
            <div class="no-results">
                <h3>No students found</h3>
                <p>Try adjusting your search criteria</p>
            </div>
        `;
                return;
            }

            studentsList.innerHTML = students.map(student => `
        <div class="student-card">
            <div class="student-header">
                <div class="student-name">${student.name}</div>
                <div class="status-badge status-${student.admission_status}">
                    ${student.admission_status}
                </div>
            </div>

            <div class="student-info">
                <div class="info-item">
                    <div class="info-label">Email</div>
                    <div class="info-value">${student.email}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Phone</div>
                    <div class="info-value">${student.phone}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Entry Date</div>
                    <div class="info-value">${new Date(student.created_at).toLocaleDateString()}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Entered by</div>
                    <div class="info-value">${student.lead_agent?.name ?? 'N/A'}</div>
                </div>
            </div>

            <div class="student-actions row">
                <div class="form-group col-md-3">
                    <label for="admission_stage" class="form-label">Admission Stage</label>
                    <select class="form-control select2" id="admission_stage" required>
                        <option value="">Select Stage</option>
                        @foreach($admission_stage as $stage)
                            <option value="{{ $stage->id }}" style="">
                                {{ ucwords(str_replace('_', ' ', $stage->title)) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="admission_status" class="form-label">Admission Status</label>
                    <select class="form-control select2" id="admission_status" required>
                        <option value="">Select Status</option>
                        
                    </select>
                </div>
            </div>
        </div>
    `).join('');
        }


        $(document).on('change', "#admission_stage", function (e) { 
            e.preventDefault();
            let admission_stage = $(this).val();

            $.ajax({
                type: 'POST',
                url: '/admin/students/convert-to-prospective',
                data: formData,
                success: function(data) {
                    if (data.status == 200) {
                        alert(data.message);
                        closeModal();
                        resetSearch();
                    } else {
                        alert(data.error);
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    alert(errorMessage);
                }
            });

            let admission_status = admissionStages.find(stage => stage.id == admission_stage);
            let options = admission_status.admissionStageAdmissionStatuses.map(status => `<option value="${status}">${status}</option>`).join('');
            $("#admission_status").html(options);
        });




        // Auto-set date range to current month
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const firstDay = new Date(today.getFullYear(), today.getMonth(), 1);

            document.getElementById('fromDate').value = firstDay.toISOString().split('T')[0];
            document.getElementById('toDate').value = today.toISOString().split('T')[0];
        });
    </script>
@endsection
