$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });


    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


    $('.form-floating input[required], .form-floating select[required], .form-floating textarea[required]')
        .each(function () {
            let $label = $(this).siblings('label'); // ওই ইনপুটের লেবেল খুঁজে বের করো
            if ($label.length && !$label.find('.required').length) {
                $label.append(" <span class='required_star'>*</span>");
            }
        });





    // Upload Box Scripts
    const fileList = $(".file-list");
    const fileInput = $("#fileInput");
    const uploadBox = $("#uploadBox");

    function addFileRow(file, response, percent = 0) {
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
        // const response = confirm("Are you sure you want to delete this file?");
        // if (!response) return;
        // $.ajax({
        //     url: "/upload/remove/" + file_id,
        //     type: "DELETE",
        //     data: {
        //         _token: token
        //     },
        //     success: function () {
        //         row.remove();
        //     }
        // });

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

    function uploadFile(file) {
        let formData = new FormData();
        formData.append("file", file);
        formData.append("_token", token);

        // temporary row with 0% progress
        let tempRow = addFileRow(file, null, 0);
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
                addFileRow(file, response, 100);
                console.log("Upload successful");
                console.log(response);

            },
            error: function (xhr) {
                statusText.css("color", "red").text("Upload failed");
            }
        });
    }

    // Browse
    fileInput.on("change", function (e) {
        const files = e.target.files;
        for (let file of files) {
            uploadFile(file);
        }
    });

    // Drag & Drop
    uploadBox.on("dragover", function (e) {
        e.preventDefault();
        uploadBox.addClass("dragover");
    });
    uploadBox.on("dragleave", function (e) {
        e.preventDefault();
        uploadBox.removeClass("dragover");
    });
    uploadBox.on("drop", function (e) {
        e.preventDefault();
        uploadBox.removeClass("dragover");
        const files = e.originalEvent.dataTransfer.files;
        for (let file of files) {
            uploadFile(file);
        }
    });

    // Click to browse
    uploadBox.on("click", function () {
        fileInput.click();
    });




    // Dynamic Dial Code Change
    $('#nationality').on('change', function () {
        let countryId = $(this).val();
        if (countryId) {
            $.ajax({
                url: '/get-dial-code/' + countryId,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    // console.log(response.dial_code);
                    $('.dial_code').text(response.dial_code);
                }
            });
        } else {
            $('.dial_code').text('');
        }
    });


});







// Upload Box Scripts previous version

// const fileList = $(".file-list");
// const fileInput = $("#fileInput");
// const uploadBox = $("#uploadBox");
// console.log("Script loaded");


// function addFileRow(file) {
//     const row = $(`
//       <div class="file-row">
//         <div class="file-info">
//           <i class="bi bi-file-earmark-pdf"></i>
//           <span>${file.name}</span>
//           <small class="text-muted">${(file.size / 1024).toFixed(1)} KB</small>
//           <span class="file-status">● APPROVED</span>
//         </div>
//         <div>
//           <small class="text-muted">${new Date().toLocaleDateString()}</small>
//           <button class="remove-btn">Remove</button>
//         </div>
//       </div>
//     `);
//     fileList.append(row);

//     row.find(".remove-btn").on("click", function () {
//         row.remove();
//     });
// }

// // Handle browse file
// fileInput.on("change", function (e) {
//     const files = e.target.files;
//     for (let file of files) {
//         addFileRow(file);
//     }
// });

// // Handle drag and drop
// uploadBox.on("dragover", function (e) {
//     e.preventDefault();
//     uploadBox.addClass("dragover");
// });
// uploadBox.on("dragleave", function (e) {
//     e.preventDefault();
//     uploadBox.removeClass("dragover");
// });
// uploadBox.on("drop", function (e) {
//     e.preventDefault();
//     uploadBox.removeClass("dragover");
//     const files = e.originalEvent.dataTransfer.files;
//     for (let file of files) {
//         addFileRow(file);
//     }
// });

// // Open file browser when clicking upload box
// uploadBox.on("click", function () {
//     fileInput.click();
// });
