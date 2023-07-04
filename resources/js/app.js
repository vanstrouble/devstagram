/* eslint-disable comma-dangle */
/* eslint-disable no-unused-vars */
/* eslint-disable semi */
/* eslint-disable quotes */
/* eslint-disable indent */
import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube tu obra aquí",
    acceptedFiles: ".png, .jpg, .jpeg, .heic",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFile: 1,
    uploadmultiple: false,
});

dropzone.on('sending', function (file, xhr, formData) {
    console.log(file);
});

dropzone.on('success', function (file, response) {
    console.log(response);
});

dropzone.on('error', function (file, message) {
    console.log(message);
});

dropzone.on('removedFile', function () {
    console.log('File deleted');
});
