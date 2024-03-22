let upload_form = document.getElementById('upload-form');

document.getElementById("upload-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "upload.php", true);
    xhr.onload = function() {
        if (this.responseText == 'upload_success') {
            alert('error', 'Failed to upload file.');
        } else {
            alert('success', 'File Uploaded and Being Review by the Admin');
            upload_form.reset();
        }
    };
    xhr.send(formData);
});