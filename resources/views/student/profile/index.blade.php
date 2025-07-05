@extends('layouts.student')
@section('title', 'Agent Profile')
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
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: #355ea9;
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
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

        .profile-content {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 0;
            min-height: 600px;
        }

        .sidebar {
            background: #f8f9fa;
            padding: 40px 30px;
            border-right: 1px solid #e9ecef;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #ddd;
            margin: 0 auto 20px;
            position: relative;
            overflow: hidden;
            border: 4px solid white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }

        .upload-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            margin: 10px auto;
            display: block;
            transition: background 0.3s;
        }

        .upload-btn:hover {
            background: #0056b3;
        }

        .agent-status {
            text-align: center;
            margin-top: 20px;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            background: #28a745;
            color: white;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }


        .main-content {
            padding: 40px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.4rem;
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-icon {
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

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #495057;
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            background: white;
        }

        .form-input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }

        .form-input[readonly] {
            background: #f8f9fa;
            cursor: not-allowed;
        }

        .password-section {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #e9ecef;
        }

        .password-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
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

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #545b62;
        }

        .btn-success {
            background: #28a745;
            color: white;
        }

        .btn-success:hover {
            background: #1e7e34;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .info-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .banking-details {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 20px;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .alert-info {
            background: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }

        @media (max-width: 768px) {
            .profile-content {
                grid-template-columns: 1fr;
            }

            .sidebar {
                text-align: center;
                border-right: none;
                border-bottom: 1px solid #e9ecef;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .password-grid {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>

@endsection
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1>Student Profile</h1>
            <p>Manage your information and account settings</p>
        </div>

        <div class="profile-content">
            <div class="sidebar">
                <div class="profile-photo">
                    <div class="photo-placeholder" id="photoPlaceholder">
                        @if ($user->photo)
                            <img src="{{ $user->photo->url }}" alt="Profile Photo" style="width: 100%; border-radius: 50%;">
                        @else
                            {{ strtoupper(substr($user->name, 0, 1)) }}
                        @endif
                    </div>
                </div>

                <button class="upload-btn" onclick="uploadPhoto()">Change Photo</button>
                <input type="file" id="photoInput" accept="image/*" style="display: none;">



                <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #dee2e6;">
                    <p style="font-size: 0.9rem; color: #6c757d; text-align: center;">
                        <strong>Member Since:</strong><br>
                        {{ \Carbon\Carbon::parse($user->created_at)->format('F Y') }}
                    </p>
                </div>
            </div>

            <div class="main-content">
                <form id="profileForm">

                    <div class="section">
                        <h2 class="section-title"><span class="section-icon">👤</span> Personal Information</h2>
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" for="fullName">Full Name</label>
                                <input type="text" id="fullName" class="form-input" value="{{ $user->name }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" id="email" class="form-input" value="{{ $user->email }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="form-input" value="{{ $user->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="form-input select2" required>
                                    <option value="">Select Country</option>

                                    @foreach($countries as $id => $name)
                                        <option value="{{ $id }}" {{ $user->country_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="action-buttons">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>


                    <!-- Password Change Section -->
                    <div class="section mt-5">
                        <h2 class="section-title"><span class="section-icon">🔐</span> Change Password</h2>
                        <div class="password-section">
                            <div class="password-grid">
                                <div class="form-group">
                                    <label class="form-label" for="currentPassword">Current Password</label>
                                    <input type="password" id="currentPassword" class="form-input" placeholder="Enter current password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="newPassword">New Password</label>
                                    <input type="password" id="newPassword" class="form-input" placeholder="Enter new password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                    <input type="password" id="confirmPassword" class="form-input" placeholder="Confirm new password">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-primary" id="changePasswordBtn" onclick="changePassword()" style="width: 100%;">Update Password</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->

                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        function uploadPhoto() {
            document.getElementById('photoInput').click();
        }

        document.getElementById('photoInput').addEventListener('change', function (event) {
            const file = event.target.files[0];

            if (!file) return;

            const formData = new FormData();
            formData.append('photo', file);

            fetch('{{ route('student.profile.photo.upload') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        // show updated image
                        document.getElementById('photoPlaceholder').innerHTML =
                            `<img src="${data.url}" alt="Profile Photo" style="width: 100%; border-radius: 50%;">`;
                        alert('Profile photo updated successfully!');
                    } else {
                        alert('Photo upload failed');
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert('Error uploading photo');
                });
        });
    </script>


    <script>

        $(document).ready(function() {

            // Form submission
            $('#profileForm').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route('student.profile.update') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        name: $('#fullName').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        country_id: $('#country').val()
                    },
                    success: function (response) {
                        alert(response.message);
                    },
                    error: function (xhr) {
                        alert('Failed to update profile');
                    }
                });
            });





            // Cancel changes
            $('#cancelBtn').on('click', function() {
                if (confirm('Are you sure you want to cancel? Any unsaved changes will be lost.')) {
                    location.reload();
                }
            });

            // Form validation on blur
            $('.form-input').on('blur', function() {
                if ($(this).prop('required') && !$(this).val().trim()) {
                    $(this).css('border-color', '#dc3545');
                } else {
                    $(this).css('border-color', '#e9ecef');
                }
            });
        });
    </script>


    <script>
        function changePassword() {
            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Validation checks
            if (!currentPassword || !newPassword || !confirmPassword) {
                alert('Please fill in all password fields.');
                return;
            }

            if (newPassword !== confirmPassword) {
                alert('New passwords do not match.');
                return;
            }

            if (newPassword.length < 8) {
                alert('Password must be at least 8 characters long.');
                return;
            }

            // Send AJAX request
            fetch('{{ route('student.profile.password') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    current_password: currentPassword,
                    new_password: newPassword,
                    new_password_confirmation: confirmPassword,
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                        // Reset fields
                        document.getElementById('currentPassword').value = '';
                        document.getElementById('newPassword').value = '';
                        document.getElementById('confirmPassword').value = '';
                    } else {
                        alert(data.message || 'Password change failed.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Something went wrong. Please try again.');
                });
        }
    </script>


@endsection
