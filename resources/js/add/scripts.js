var title;
var filesize = 0;

Dropzone.options.dropzone = {
	paramName: "file",
	maxFilesize: 20480, // 20 GB (20480 MB)
	addRemoveLinks: true,
	parallelUploads: 32,
	uploadMultiple: true,

	init: function() {

		this.on("drop", function() {
			title = null;
			filesize = 0;
		});

		this.on("addedfile", function(file) {
			filesize += file.size;

			/** TITLE */
			if (!title) {
				title = file.name.replace('_', '').slice(0, -4);
				title = title.replace(/\([^)]*\)|\[[^\]]*\]|\-\ \d+/g, '').trim();
				$('input[name=title]').val(title);
			}

			/** FILESIZE */
			$('input[name=filesize]').val(filesize);

			this.removeFile(file);
		});

	}
}
