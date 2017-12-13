var title;
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

			/** TITLE */
			if (!title) {
				title = file.name.replace('_', '').slice(0, -4);
				title = title.split(']', 2)[1].slice(1).split('[', 1)[0].slice(0, -6);
				$('input[name=title]').val(title);
			}

			/** FILESIZE */
			$('input[name=filesize]').val(filesize);

			this.removeFile(file);
		});

	}
}
