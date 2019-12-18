
$(function () {
    $("#image").cropper({
        zoomable: false
    });
});


function crop() {
    // Blob is a textual form of an image which will be obtained from <img> tag
    $("#image").cropper("getCroppedCanvas").toBlob(function (blob) {

        // FormData is a built-in javascript object
        var formData = new FormData();
        formData.append("croppedImage", blob);

        $.ajax({
            url: "upload.php", // name of the file which we will be creating soon
            method: "POST",
            data: formData,
            processData: false, // necessary for sending image data
            contentType: false, // necessary for sending image data
            success: function (response) {
                alert(response);
            }, error: function (xhr, status, error) {
                console.log(status, error);
            }
        });
    });
}
