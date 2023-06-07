import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

if (document.querySelector("#dropzone")) {
    const dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Sube aqui tu imagen",
        acceptedFiles: ".png, .jpg, .jpeg, .gif",
        addRemoveLinks: true,
        dictRemoveFile: "Borrar Archivo",
        maxFiles: 1,
        uploadMultiple: false,

        init: function () {
            if (document.querySelector('[name="image"]').value.trim()) {
                const postedImage = {};
                postedImage.size = 1234;
                postedImage.name =
                    document.querySelector('[name="image"]').value;

                this.options.addedfile.call(this, postedImage);
                this.options.thumbnail.call(
                    this,
                    postedImage,
                    `/uploads/${postedImage.name}`
                );

                postedImage.previewElement.classList.add(
                    "dz-success",
                    "dz-complete"
                );
            }
        },
    });

    dropzone.on("success", function (file, response) {
        document.querySelector('[name="image"]').value = response.image;
    });

    dropzone.on("error", function (file, message) {
        console.log(message);
    });

    dropzone.on("removedfile", function (fie) {
        document.querySelector('[name="image"]').value = "";
    });
}
