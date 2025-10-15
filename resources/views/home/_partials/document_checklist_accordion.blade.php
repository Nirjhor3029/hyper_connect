@push('styles')
    <style>
        .guidelines-container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .accordion-sidebar {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .accordion-sidebar-title {
            padding: 20px;
            font-size: 24px;
            font-weight: 600;
            color: #333;
            border-bottom: 1px solid #e9ecef;
        }

        .accordion-item {
            border: none;
            border-bottom: 1px solid #e9ecef;
        }

        .accordion-item:last-child {
            border-bottom: none;
        }

        .accordion-button {
            background-color: #fff;
            color: #333;
            font-size: 15px;
            padding: 16px 20px;
            border: none;
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--primary-color);
            color: #fff;
        }

        .accordion-button:hover {
            background-color: #f8f9fa;
        }

        .accordion-button:not(.collapsed):hover {
            background-color: var(--primary-color);
        }

        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23333'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .content-area {
            background-color: #fff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            min-height: 600px;
        }

        .content-title {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .content-text {
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .guideline-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .guideline-list li {
            padding: 10px 0;
            color: #555;
            line-height: 1.6;
        }

        .guideline-list li strong {
            color: #333;
        }

        .photo-examples {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 40px 0;
        }

        .photo-example {
            text-align: center;
        }

        .photo-box {
            width: 200px;
            height: 240px;
            background-color: #e0e0e0;
            border: 2px solid #333;
            border-radius: 4px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .photo-silhouette {
            width: 80%;
            height: 85%;
            background-color: #555;
            border-radius: 50% 50% 0 0;
            position: relative;
        }

        .check-mark,
        .x-mark {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        .check-mark {
            background-color: var(--primary-color);
            color: #fff;
        }

        .x-mark {
            background-color: #e53935;
            color: #fff;
        }

        .dimension-label {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }


        .accordion-info-button {
            font-size: 18px;
            cursor: pointer;
            color: var(--primary-color);
        }
    </style>
@endpush


<div class="accordion" id="documentAccordion">
    <div class="accordion-item">
        <div class="accordion-header" id="headingOne">
            <div class="accordion-button title" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseDocument" aria-expanded="true" aria-controls="collapseDocument">
                <div class="d-flex justify-content-between align-items-center w-100 gap-lg-4">
                    <div>
                        <h4>Document Checklist</h4>
                    </div>
                </div>
            </div>
        </div>

        <div id="collapseDocument" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#documentAccordion">
            <div class="accordion-body">
                <div class="guidelines-container">
                    <div class="row">
                        <!-- Left Sidebar Accordion -->
                        <div class="col-lg-3">
                            <div class="accordion-sidebar">
                                <div class="accordion-sidebar-title">Guidelines</div>
                                <div class="accordion accordion-flush" id="guidelinesAccordion">
                                    {{-- Upload Your passport --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                                data-bs-target="#upload-passport" data-bs-instruction="upload-passport">
                                                Upload Your passport
                                            </button>
                                        </h2>
                                    </div>

                                    {{-- Photo Guidelines --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#photo-guidelines"
                                                data-bs-instruction="photo-guidelines">
                                                Photo Guidelines
                                            </button>
                                        </h2>
                                    </div>

                                    {{-- Academic certificates --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#academic-certificates"
                                                data-bs-instruction="academic-certificates">
                                                Academic certificates
                                            </button>
                                        </h2>
                                    </div>

                                    {{-- IELTS --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#english-language-requirement"
                                                data-bs-instruction="english-language-requirement">
                                                IELTS/MOI/PTE/Any other certificates
                                            </button>
                                        </h2>
                                    </div>

                                    {{-- Required personal attachments --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#required-personal-attachments"
                                                data-bs-instruction="required-personal-attachments">
                                                Required personal attachments
                                            </button>
                                        </h2>
                                    </div>

                                    {{-- Other Documents --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#other-documents"
                                                data-bs-instruction="other-documents">
                                                Other Documents
                                            </button>
                                        </h2>
                                    </div>

                                    {{-- Pay slip --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#pay-slip"
                                                data-bs-instruction="pay-slip">
                                                Pay slip
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content Area -->
                        <div class="col-lg-9">
                            <div class="content-area" id="contentArea">
                                <h5>Passport Photo Guidelines:</h5>
                                <h1 class="content-title">Passport Photo Guidelines</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Instruction Modal -->
<div class="modal fade" id="instructionModal" tabindex="-1" aria-labelledby="instructionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="instructionModalLabel">Instructions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Static instructions will be injected here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- You can add an Upload button here -->
            </div>
        </div>
    </div>
</div>



<!-- Static Instructions for Modal (Initially hidden) -->
@include('home._partials.instruction_modals')

@include('home._partials.accordions_content', ['uploads' => $uploads])





@push('scripts')

    <script src="{{ asset('assets/home/js/document_upload/upload_passport.js') }}"></script>

    <script>
        $(document).ready(function() {

            // on page load: show the first accordion instruction
            const instructionContent = $('#upload-passport');
            if (instructionContent.length) {
                // Show the modal
                // $('#instructionModalLabel').text($(this).text());
                // $('#modalContent').html(instructionContent.html());
                // $('#instructionModal').modal('show');

                let instructionContentPart = $('#upload-passport-content');
                $('#contentArea').html(instructionContentPart.html());
            }


            // Handle accordion button clicks to show the modal with the corresponding instruction
            $('.accordion-button').on('click', function() {

                let that = $(this);

                const instructionId = $(this).data('bs-instruction');
                const instructionContent = $('#' + instructionId);

                if (instructionContent.length) {
                    $('.accordion-button').addClass('collapsed');
                    that.removeClass('collapsed');

                    // Show the modal
                    $('#instructionModalLabel').text($(this).text());
                    $('#modalContent').html(instructionContent.html()); // Inject the content into the modal
                    $('#instructionModal').modal('show'); // Show the modal



                    let contentArea = $('#contentArea');
                    let instructionContentPart = $('#' + instructionId + '-content');
                    // console.log(instructionContentPart);

                    contentArea.html(instructionContentPart.html());
                }
            });


            $(document).on('click', '.accordion-info-button', function() {
                const instructionId = $(this).data('bs-instruction');
                const instructionContent = $('#' + instructionId);
                console.log(instructionContent);


                if (instructionContent.length) {
                    // Show the modal
                    $('#instructionModalLabel').text($(this).text());
                    $('#modalContent').html(instructionContent.html()); // Inject the content into the modal
                    $('#instructionModal').modal('show'); // Show the modal
                }
            });
        });
    </script>
@endpush
