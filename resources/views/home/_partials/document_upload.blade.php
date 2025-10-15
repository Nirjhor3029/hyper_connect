<div class="accordion" id="documentAccordion">
    <div class="accordion-item">
        <div class="accordion-header" id="headingOne">
            <div class="accordion-button title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocument"
                aria-expanded="true" aria-controls="collapseDocument">
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
                <div class="file-list">
                    @foreach ($uploads as $item)
                        <div class="file-row" id="file-{{ $item->id }}">
                            {{-- <span>{{ $item->file_custom_name ?? '' }}</span> --}}
                            {{-- <input type="text" class="file-name"
                                                value="{{ $item->file_custom_name ?? '' }}" readonly> --}}
                            <div class="file-info">

                                <i
                                    class="{{ $item->file_type == 'pdf' ? 'fas fa-file-pdf' : 'fas fa-file-image' }}"></i>
                                <span>{{ $item->file_custom_name ?? '' }}</span>
                                <small class="text-muted">
                                    {{ number_format($item->file_size / 1024, 1, '.', '') }} KB
                                </small>
                                <span class="file-status">
                                    {{ $item->file_status ?? '' }}
                                </span>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 8px;">
                                {{-- <div class="progress" style="height:6px; margin-bottom:6px;">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width:${percent}%" aria-valuenow="${percent}"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> --}}
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editFileModal{{ $loop->index }}">
                                            <i class="fas fa-file-edit"></i>
                                        </button>
                                        <button class="remove-btn btn btn-outline-danger btn-sm"
                                            data-id="{{ $item->id }}"
                                            style="border: 1px solid red;border-radius: 50px;">
                                            <i class="fa fa-trash"></i>
                                            Remove
                                        </button>
                                        <div class="modal fade" id="editFileModal{{ $loop->index }}" tabindex="-1"
                                            aria-labelledby="editFileModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editFileModalLabel">
                                                            Edit File Name</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('student.application.form.updateFileName', ['id' => $item->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="file_name" class="form-label">File
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="file_name" name="file_name"
                                                                    value="{{ $item->file_custom_name ?? '' }}">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    <small class="text-muted">{{ $item->created_at ?? '' }}</small>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Upload Box -->
                <input type="file" id="fileInput" class="d-none" accept=".jpeg,.jpg,.png,.pdf">
                <div class="upload-box mt-3" id="uploadBox">
                    <p>
                        <i class="bi bi-upload"></i>
                        Drag and drop or <span class="text-danger">browse</span> to upload
                        <b> your documents</b>
                        {{-- <b>Transcript Certificate</b> --}}
                    </p>
                    <small class="text-muted">Supports JPEG, PNG & PDF</small>
                </div>
            </div>
        </div>
    </div>
</div>
