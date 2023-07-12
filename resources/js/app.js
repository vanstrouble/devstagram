/* eslint-disable comma-dangle */
/* eslint-disable no-unused-vars */
/* eslint-disable semi */
/* eslint-disable quotes */
/* eslint-disable indent */
import Dropzone from "dropzone";

Dropzone.autoDiscover = false;
if (document.getElementById("dropzone")) {
    const dropzone = new Dropzone(".dropzone", {
        dictDefaultMessage: "Sube aquí tu obra",
        acceptedFiles: ".png,.jpg,.jpeg,.gif",
        addRemoveLinks: true,
        dictRemoveFile: "Borrar archivo",
        maxFiles: 1,
        uploadMultiple: false,
        init: function () {
            // alert("Dropzone created successfully");
            if (document.querySelector('[name="image"]').value.trim()) {
                const publishedImage = {};
                publishedImage.size = 1234;
                publishedImage.name =
                    document.querySelector('[name="image"]').value;

                this.options.addedfile.call(this, publishedImage);
                this.options.thumbnail.call(
                    this,
                    publishedImage,
                    `/uploads/${publishedImage.name}`
                );

                publishedImage.previewElement.classList.add(
                    "dz-success",
                    "dz-complete"
                );
            }
        },
    });

    // dropzone.on("sending", function (file, xhr, formData) {
    //     console.log(formData);
    // });

    dropzone.on("success", function (file, response) {
        // console.log(response.image); // Testing upload images successfully
        document.querySelector('[name="image"]').value = response.image;
    });

    // dropzone.on("error", function (file, message) {
    //     console.log(message);
    // });

    dropzone.on("removedfile", function () {
        // console.log("File deleted");
        document.querySelector('[name="image"]').value = "";
    });
}
