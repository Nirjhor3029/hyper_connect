<div class="file-row" id="file-{{ $item->id }}">
    <div class="file-info">
        <i class="{{ $item->file_type == 'pdf' ? 'fas fa-file-pdf' : 'fas fa-file-image' }}"></i>
        <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank" rel="noopener noreferrer">
            <span>{{ $item->file_custom_name ?? '' }}</span>
        </a>
        <small class="text-muted">
            {{ number_format($item->file_size / 1024, 1, '.', '') }} KB
        </small>
        <span class="file-status">
            {{ $item->file_status ?? '' }}
        </span>
    </div>
    <div style="display: flex; flex-direction: column; gap: 8px;">
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#editFileModal{{ $loop->index }}">
                    <i class="fas fa-file-edit"></i>
                </button>
                <button class="remove-btn btn btn-outline-danger btn-sm" data-id="{{ $item->id }}"
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
                                        <input type="text" class="form-control" id="file_name" name="file_name"
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
