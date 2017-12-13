var filesize = 0;

Dropzone.options.dropzone = {
	paramName: "file",
	maxFilesize: 20480, // 20 GB (20480 MB)
	addRemoveLinks: true,
	parallelUploads: 32,
	uploadMultiple: true,

	init: function() {

		this.on("addedfile", function(file) {
			filesize += file.size;

			/** FILESIZE */
			$('input[name=filesize]').val(filesize);
		});

		this.on("sending", function(file) {
			this.removeFile(file);
		});

	}
}
