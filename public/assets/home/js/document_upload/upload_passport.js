$(document).ready(function () {

    // Store token in a variable globally
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    console.log('upload_passport.js');

    let postFix = '-upload-passport';

    // Upload Box Scripts:Start


    const fileInputID = "#fileInput" + postFix;


    const uploadBoxContainerClass = ".upload-box-container";
    const fileInputClass = ".file-input";
    const uploadBoxClass = ".upload-box";
    const fileListClass = ".file-list";


    const fileInput = $(fileInputID);


    function addFileRow(file, response, percent = 0, uploadBoxContainer) {
        const row = $(`
                    <div class="file-row" id="file-${response?.id || file.name.replace(/\W/g, '')}">
                        <div class="file-info">
                            <i class="${response?.file_type == 'pdf' ? 'fas fa-file-pdf' : 'fas fa-file-image'}"></i>
                            <span>${response ? response.file_name : file.name}</span>
                            <small class="text-muted">${(file.size / 1024).toFixed(1)} KB</small>
                            <span class="file-status">${percent < 100 ? percent + "%" : "✔ Uploaded"}</span>
                        </div>
                        <div style="min-width:150px;">
                            <div class="progress" style="height:6px; margin-bottom:6px;">
                                <div class="progress-bar" role="progressbar" 
                                        style="width:${percent}%" 
                                        aria-valuenow="${percent}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-muted">${response ? response.uploaded_at : ""}</small>
                            ${response ? `<button class="remove-btn" data-id="${response.id}">Remove</button>` : ""}
                        </div>
                    </div>
                `);

        console.log(uploadBoxContainer);

        let fileList = uploadBoxContainer.find(fileListClass);
        fileList.append(row);

        // remove button bind (only after uploaded)
        if (response) {
            row.find(".remove-btn").on("click", function () {
                const id = $(this).data("id");
                removeFile(id, row);
            });
        }
        return row;
    }

    $('.remove-btn').on("click", function () {
        let that = $(this);
        const id = that.data("id");
        console.log(id);

        const row = that.closest(".file-row");
        removeFile(id, row);
    });

    function removeFile(file_id, row) {

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to delete this file?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/upload/remove/" + file_id,
                    type: "DELETE",
                    data: {
                        _token: token
                    },
                    success: function () {
                        row.remove();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },
                    error: function () {
                        Swal.fire(
                            'Error!',
                            'Something went wrong. Please try again.',
                            'error'
                        )
                    }
                });
            }
        });
    }

    function logFormData(formData) {
        for (let pair of formData.entries()) {
            console.log(pair[0] + ": " + pair[1]);
        }
    }


    function uploadFile(file, uploadBoxContainer) {

        let fileInput = uploadBoxContainer.find(fileInputClass);

        let formData = new FormData();
        formData.append("file", file);
        formData.append("_token", token);
        formData.append("file_name", fileInput.attr("name"));
        // logFormData(formData);
        // console.log(file);
        // return;


        // temporary row with 0% progress
        let tempRow = addFileRow(file, null, 0, uploadBoxContainer);
        let progressBar = tempRow.find(".progress-bar");
        let statusText = tempRow.find(".file-status");

        $.ajax({
            xhr: function () {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        let percentComplete = Math.round((evt.loaded / evt.total) *
                            100);
                        progressBar.css("width", percentComplete + "%").attr(
                            "aria-valuenow", percentComplete);
                        statusText.text(percentComplete + "%");
                    }
                }, false);
                return xhr;
            },
            url: "/upload",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // replace temp row with final row
                tempRow.remove();
                addFileRow(file, response, 100, uploadBoxContainer);
                console.log("Upload successful");
                console.log(response);

            },
            error: function (xhr) {
                statusText.css("color", "red").text("Upload failed");
            }
        });
    }

    // Browse
    $(document).on('change',fileInputClass,function (e) {
    // fileInput.on("change", function (e) {
        console.log();
        
        let that = $(this);
        let uploadBoxContainer = that.closest(uploadBoxContainerClass);
        const files = e.target.files;
        for (let file of files) {
            uploadFile(file, uploadBoxContainer);
        }
    });


    // function getCurrentUploadBox(that) {

    // }

    // Drag & Drop
    $(document).on("dragover", uploadBoxClass, function (e) {
        e.preventDefault();
        console.log('dragover');

        let that = $(this);
        let uploadBoxContainer = that.closest(uploadBoxContainerClass);
        let uploadBox = uploadBoxContainer.find(uploadBoxClass);
        uploadBox.addClass("dragover");
        // console.log(uploadBox);
    });
    $(document).on("dragleave", uploadBoxClass, function (e) {
        e.preventDefault();

        let that = $(this);
        let uploadBoxContainer = that.closest(uploadBoxContainerClass);
        let uploadBox = uploadBoxContainer.find(uploadBoxClass);
        uploadBox.removeClass("dragover");
    });

    $(document).on("drop", uploadBoxClass, function (e) {
        e.preventDefault();

        let that = $(this);
        let uploadBoxContainer = that.closest(uploadBoxContainerClass);
        let uploadBox = uploadBoxContainer.find(uploadBoxClass);
        uploadBox.removeClass("dragover");
        const files = e.originalEvent.dataTransfer.files;
        for (let file of files) {
            uploadFile(file, uploadBoxContainer);
        }
    });

    // Click to browse
    $(document).on("click", uploadBoxClass, function () {
        let that = $(this);
        let uploadBoxContainer = that.closest(uploadBoxContainerClass);
        let fileInput = uploadBoxContainer.find(fileInputClass);
        fileInput.click();
    });
    // Upload Box Scripts:Start


});

