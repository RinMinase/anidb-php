Dropzone.options.dropzone = {
	paramName: "file",
	maxFilesize: 20480, // 20 GB (20480 MB)
	addRemoveLinks: true,
	parallelUploads: 30,
	uploadMultiple: true,

	init: function() {

		this.on("sending", function(file) {
			this.removeFile(file);
		});

	}
}
