// csrf_setup.js
$(document).ready(function () {
    // Set the CSRF token globally
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });

    // Store token in a variable globally
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // console.log(`token: ${token}`);
    
});
