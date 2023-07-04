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
    dicRemoveFile: "Borrar Archivo",
    maxFile: 1,
    uploadmultiple: false,
});
