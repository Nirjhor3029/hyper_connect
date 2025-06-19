@extends('layouts.admin')

@section('title', 'New Students | Student Search & Prospect Management')
@section('styles')
    @parent
    <style>

           .select2-container--default .select2-selection--single {
            padding-top: 10px;
            height: 50px;
        }

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
            <h1>Student Search & Prospect Management</h1>
            <p>Search students and convert them to prospects with detailed information</p>
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

            <div class="student-actions">
                <button class="btn btn-info btn-sm" onclick="contactStudent(${student.id})">📞 Contact</button>
                <button class="btn btn-success btn-sm" onclick="openProspectModal(${student.id})"
                        ${student.status === 'prospect' ? 'disabled' : ''}>
                    ✅ Convert to Prospect
                </button>

                <a href="/admin/offer-letter/${student.id}" class="btn btn-primary btn-sm" >✅ Offer letter</a>

 <button class="btn btn-secondary btn-sm" onclick="viewDetails(${student.id})">👁️ View Details</button>
            </div>
        </div>
    `).join('');
        }



        // Contact student
        function contactStudent(studentId) {
            const student = studentsData.find(s => s.id === studentId);
            if (student && student.status === 'new') {
                student.status = 'contacted';
                displayStudents(filteredStudents);
                alert(`Marked ${student.name} as contacted. You can now call them to gather additional information.`);
            } else {
                alert(`Student already contacted or converted to prospect.`);
            }
        }

        // Open prospect modal
        function openProspectModal(studentId) {


            window.location.href = `/admin/convert-prospectus/${studentId}`;

            const student = studentsData.find(s => s.id === studentId);
            if (!student) return;

            if (student.status === 'prospect') {
                alert('This student is already a prospect.');
                return;
            }

            document.getElementById('selectedStudentId').value = studentId;
            document.getElementById('prospectModal').style.display = 'block';
        }

        // Close modal
        function closeModal() {
            document.getElementById('prospectModal').style.display = 'none';
            document.getElementById('prospectForm').reset();
        }

        // Save prospect
        function saveProspect() {

            let prospectForm = $('#prospectForm');
            var formData = prospectForm.serialize();
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

            // const studentId = parseInt(document.getElementById('selectedStudentId').value);
            // const student = studentsData.find(s => s.id === studentId);


            // Validate required fields
            // const requiredFields = ['homeCountry', 'maxTuitionFee', 'completedSubject', 'completionYear',
            //     'interestedSubject', 'studyLevel', 'ieltsStatus', 'moiStatus'
            // ];
            // let isValid = true;

            // for (let field of requiredFields) {
            //     const element = document.getElementById(field);
            //     if (!element.value.trim()) {
            //         element.style.borderColor = '#dc3545';
            //         isValid = false;
            //     } else {
            //         element.style.borderColor = '#e9ecef';
            //     }
            // }

            // Check if at least one interested country is selected
            // const interestedCountries = Array.from(document.querySelectorAll('input[name="interestedCountries"]:checked'))
            //     .map(cb => cb.value);
            // if (interestedCountries.length === 0) {
            //     alert('Please select at least one interested country.');
            //     return;
            // }

            // if (!isValid) {
            //     alert('Please fill in all required fields.');
            //     return;
            // }

            // Collect prospect data
            // const prospectData = {
            //     homeCountry: document.getElementById('homeCountry').value,
            //     maxTuitionFee: document.getElementById('maxTuitionFee').value,
            //     interestedCountries: interestedCountries,
            //     completedSubject: document.getElementById('completedSubject').value,
            //     completionYear: document.getElementById('completionYear').value,
            //     gpa: document.getElementById('gpa').value,
            //     interestedSubject: document.getElementById('interestedSubject').value,
            //     studyLevel: document.getElementById('studyLevel').value,
            //     ieltsStatus: document.getElementById('ieltsStatus').value,
            //     ieltsScore: document.getElementById('ieltsScore').value,
            //     moiStatus: document.getElementById('moiStatus').value,
            //     additionalNotes: document.getElementById('additionalNotes').value,
            //     convertedDate: new Date().toISOString().split('T')[0],
            //     convertedBy: 'agent_2' // Current agent
            // };

            // Update student status and add prospect data
            // student.status = 'prospect';
            // student.prospectData = prospectData;

            // Log the data (in real app, send to server)
            // console.log('Student converted to prospect:', {
            //     studentId: studentId,
            //     studentName: student.name,
            //     prospectData: prospectData
            // });

            // Update display
            // displayStudents(filteredStudents);
            // closeModal();
            // alert(`${student.name} has been successfully converted to a prospect!`);
        }

        // View student details
        function viewDetails(studentId) {

            window.location.href = `/admin/students/${studentId}`;
            const student = studentsData.find(s => s.id === studentId);
            if (!student) return;

            let details = `
                    Student Details:
                    ================
                    Name: ${student.name}
                    Email: ${student.email}
                    Phone: ${student.phone}
                    Entry Date: ${new Date(student.entryDate).toLocaleDateString()}
                    Entered by: ${student.agentDisplayName}
                    Status: ${student.status.charAt(0).toUpperCase() + student.status.slice(1)}
                                `;

            if (student.prospectData) {
                details += `

                    Prospect Information:
                    ====================
                    Home Country: ${student.prospectData.homeCountry}
                    Max Tuition Fee: ${student.prospectData.maxTuitionFee === 'unlimited' ? 'No Limit' : student.prospectData.maxTuitionFee}
                    Interested Countries: ${student.prospectData.interestedCountries.join(', ')}
                    Completed Subject: ${student.prospectData.completedSubject}
                    Completion Year: ${student.prospectData.completionYear}
                    GPA: ${student.prospectData.gpa || 'Not provided'}
                    Interested Subject: ${student.prospectData.interestedSubject}
                    Study Level: ${student.prospectData.studyLevel}
                    IELTS Status: ${student.prospectData.ieltsStatus}
                    IELTS Score: ${student.prospectData.ieltsScore || 'Not provided'}
                    MOI Status: ${student.prospectData.moiStatus}
                    Additional Notes: ${student.prospectData.additionalNotes || 'None'}
                    Converted Date: ${new Date(student.prospectData.convertedDate).toLocaleDateString()}
                    Converted By: Agent 2
                                    `;
            }

            alert(details);
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('prospectModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // Auto-set date range to current month
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const firstDay = new Date(today.getFullYear(), today.getMonth(), 1);

            document.getElementById('fromDate').value = firstDay.toISOString().split('T')[0];
            document.getElementById('toDate').value = today.toISOString().split('T')[0];
        });

        // Enable/disable IELTS score field based on status
        document.getElementById('ieltsStatus').addEventListener('change', function() {
            const ieltsScore = document.getElementById('ieltsScore');
            if (this.value === 'done') {
                ieltsScore.required = true;
                ieltsScore.style.opacity = '1';
            } else {
                ieltsScore.required = false;
                ieltsScore.style.opacity = '0.6';
                ieltsScore.value = '';
            }
        });

        // Format phone number display
        function formatPhoneNumber(phone) {
            // Simple formatting for display
            return phone.replace(/(\+\d{1,3})\s?(\d{3})(\d{3})(\d{4})/, '$1 $2-$3-$4');
        }

        // Export prospects (bonus feature)
        function exportProspects() {
            const prospects = studentsData.filter(student => student.status === 'prospect');
            if (prospects.length === 0) {
                alert('No prospects to export.');
                return;
            }

            let csvContent = "data:text/csv;charset=utf-8,";
            csvContent +=
                "Name,Email,Phone,Home Country,Max Tuition Fee,Interested Countries,Completed Subject,Interested Subject,IELTS Status,IELTS Score,MOI Status,Converted Date\n";

            prospects.forEach(student => {
                const data = student.prospectData;
                csvContent +=
                    `"${student.name}","${student.email}","${student.phone}","${data.homeCountry}","${data.maxTuitionFee}","${data.interestedCountries.join('; ')}","${data.completedSubject}","${data.interestedSubject}","${data.ieltsStatus}","${data.ieltsScore || ''}","${data.moiStatus}","${data.convertedDate}"\n`;
            });

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `prospects_${new Date().toISOString().split('T')[0]}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
@endsection
