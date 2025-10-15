{{-- Upload passport content --}}
<div id="upload-passport-content" class="instruction-content" style="display: none;">
    <div class="upload-container">
        <div class="d-flex justify-content-between">
            <h3>Upload Your passport</h3>
            <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#upload-passport"
                data-bs-instruction="upload-passport">
                <i class="fas fa-info-circle" style="cursor: pointer;"></i>
            </span>
        </div>

        <div class="upload-box-container">
            @php
                $input_name = 'passport-front';
            @endphp
            1. upload your passport front page (PDF)(5MB)

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".pdf">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>

        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'passport-full';
            @endphp
            2. upload your full passport (PDF) (max 20MB)

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".pdf">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>
    </div>

</div>


{{-- photo-guidelines --}}
<div id="photo-guidelines-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            Photo guidelines:
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#photo-guidelines"
            data-bs-instruction="photo-guidelines">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>
        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'photo-own';
            @endphp
            upload your passport size photo

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>JPG, JPEG, PNG</strong> Only</small>
            </div>
        </div>
    </div>

</div>




{{-- academic-certificates --}}
<div id="academic-certificates-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            Academic Certificates:
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#academic-certificates"
            data-bs-instruction="academic-certificates">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>
        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'academic-certificates';
            @endphp
            Upload Your Latest/ Higher Education Certificate

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".pdf">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>
    </div>

</div>




{{-- english-language-requirement --}}
<div id="english-language-requirement-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            IELTS/ MOI/ PTE/ Any Other certificates
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#english-language-requirement"
            data-bs-instruction="english-language-requirement">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>
        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'language-certificates-ielts';
            @endphp
            Upload IELTS Certificate

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>

        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'language-certificates-moi';
            @endphp
            Upload MOI Certificate

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>

        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'language-certificates-pte';
            @endphp
            Upload PTE Certificate

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>

        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'language-certificates-others';
            @endphp
            Any Others Certificate

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>PDF</strong> Only</small>
            </div>
        </div>
    </div>

</div>







{{-- required-personal-attachments --}}
<div id="required-personal-attachments-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            Required personal attachments:
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#required-personal-attachments"
            data-bs-instruction="required-personal-attachments">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>
        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'personal-attachments';
            @endphp
            upload your Required personal attachments

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none"
                accept=".jpeg,.jpg,.png,.pdf">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>JPG, JPEG, PNG & PDF</strong> Only</small>
            </div>
        </div>
    </div>

</div>



{{-- other-documents --}}
<div id="other-documents-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            Other Documents:
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#other-documents"
            data-bs-instruction="other-documents">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>
        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'other-documents';
            @endphp
            Upload Any Other Documents

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none"
                accept=".jpeg,.jpg,.png,.pdf">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>JPG, JPEG, PNG & PDF</strong> Only</small>
            </div>
        </div>
    </div>

</div>




{{-- pay-slip --}}
<div id="pay-slip-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            Pay Slip:
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#pay-slip"
            data-bs-instruction="pay-slip">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>

        <form id="pay-slip-form">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="transaction_date" class="form-label">Transaction Date</label>
                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" value="{{$paySlip->transaction_date ?? ''}}"
                        required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="category" class="form-label">category</label>
                    <input type="text" class="form-control" id="category" name="category" required
                        value="{{ $paySlip->category ?? '' }}">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="bank_account_number" class="form-label">Bank Account Number</label>
                    <input type="text" class="form-control" id="bank_account_number" name="bank_account_number" value="{{$paySlip->bank_account_number ?? ''}}"
                        required>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" value="{{ $paySlip->amount ?? '' }}" required>
                </div>
            </div>

            <div class="d-flex justify-content-end">

                <input type="submit" value="submit" class="btn btn-success" id="pay-slip-submit">
                {{-- <a href="#" class="btn btn-success"  id="pay-slip-submit">Submit</a> --}}
            </div>

            {{-- <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="salary">Salary</option>
                    <option value="bonus">Bonus</option>
                    <option value="other">Other</option>
                </select>
            </div> --}}
        </form>

    </div>
    <hr>
    <div>
        <div class="mt-5 upload-box-container">
            @php
                $input_name = 'pay-slip';
            @endphp
            Upload Pay Slip Given by Bank

            <div class="file-list" id="fileList">
                @isset($uploads[$input_name])
                    @foreach ($uploads[$input_name] as $item)
                        @include('home._partials.file_item', ['item' => $item])
                    @endforeach
                @endisset
            </div>
            <!-- Upload Box -->
            <input type="file" name="{{ $input_name }}" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>JPG, JPEG, PNG</strong> Only</small>
            </div>
        </div>
    </div>

</div>



{{-- photo-guidelines --}}
<div id="photo-guidelines-content" class="instruction-content" style="display: none;">

    <div class="d-flex justify-content-between">
        <h3>
            Photo guidelines:
        </h3>
        <span class=" accordion-info-button" style="cusror: pointer" data-bs-target="#photo-guidelines"
            data-bs-instruction="photo-guidelines">
            <i class="fas fa-info-circle" style="cursor: pointer;"></i>
        </span>
    </div>

    <div>
        <div class="mt-5 upload-box-container">
            upload your passport size photo

            <div class="file-list" id="fileList"></div>
            <!-- Upload Box -->
            <input type="file" name="upload-passport-full" class="file-input d-none" accept=".jpeg,.jpg,.png">
            <div class="upload-box mt-3">
                <p>
                    <i class="bi bi-upload"></i>
                    Drag and drop or <span class="text-danger">browse</span> to upload
                    <b> your documents</b>
                    {{-- <b>Transcript Certificate</b> --}}
                </p>
                <small class="text-muted">Supports <strong>JPG, JPEG, PNG</strong> Only</small>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    {{-- <!-- jQuery এবং SweetAlert যুক্ত করো -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    <script>
        $(document).ready(function() {
            console.log('pay slip js loaded');



            $(document).on('click', "#pay-slip-cancel", function(e) {
                e.preventDefault();
                console.log("pay-slip-cancel");

            })

            $(document).on('click', '#pay-slip-submit', function(e) {
                e.preventDefault();

                console.log("pay-slip-submit");


                // form data নেওয়া
                let formData = $('#pay-slip-form').serialize();

                $.ajax({
                    url: '/pay-slip/submit',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Successfully submitted!',
                            icon: 'success',
                            confirmButtonColor: '#28a745'
                        });

                        // ফর্ম রিসেট করা
                        // $('#pay-slip-form')[0].reset();
                    },

                    error: function(xhr) {
                        var errorMessage = xhr.responseText;
                        if (xhr.status === 422) {
                            errorMessage = JSON.parse(xhr.responseText).message;
                        }


                        Swal.fire({
                            title: 'Error!',
                            text: errorMessage,
                            // text: 'Something went wrong. Please try again.',
                            icon: 'error',
                            confirmButtonColor: '#d33'
                        });
                        console.log(xhr.responseText);
                    }

                });
            });

        });
    </script>
@endpush
